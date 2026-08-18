<?php 
require dirname(__DIR__) . "/bootstrap.php";
requirePost("/categories.php");

if (!isset($_POST["id"]) || !ctype_digit($_POST["id"])) {
    redirect("/categories.php");
}
$data = [
    $id = (int) $_POST["id"],
    $name = trim($_POST["name"] ?? "")
];
validateRequiredFields($data, "Category name cannot be empty", "/categories.php");
try {
    executeQuery(
    $pdo,
    "UPDATE categories SET name = :name WHERE id = :id AND user_id = :user_id",
    array(
        ":name" => $name,
        ":id" => $id,
        ":user_id" => $_SESSION["id"]
    )
);
flashAndRedirect("success", "Category renamed to '$name'", "/expense-tracker/categories.php");
} catch (PDOException $e) {
    if ($e->errorInfo[0] === "23000" && $e->errorInfo[1] === 1062) {
        flashAndRedirect("error", "A category named '$name' already exists.", "/expense-tracker/categories.php");
    }
    throw $e;
}