<?php
class Student {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    // a. Retrieve all students
    public function all() {
        return $this->pdo->query("SELECT * FROM students")->fetchAll();
    }

    // b. Retrieve a single student by ID
    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM students WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    // c. Insert a new student
    public function create($name, $email, $course) {
        $stmt = $this->pdo->prepare("INSERT INTO students (name, email, course) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $email, $course]);
    }

    // d. Update an existing student
    public function update($id, $name, $email, $course) {
        $stmt = $this->pdo->prepare("UPDATE students SET name = ?, email = ?, course = ? WHERE id = ?");
        return $stmt->execute([$id, $name, $email, $course, $id]);
    }

    // e. Remove a student record
    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM students WHERE id = ?");
        return $stmt->execute([$id]);
    }
}