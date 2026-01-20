<?php
// Fix 1: Use __DIR__ (double underscores)
require_once __DIR__ . '/../models/Student.php';

class StudentController {
    private $student;
    private $blade;

    // Must have TWO arguments here to match index.php
    public function __construct($studentModel, $blade) {
        $this->student = $studentModel;
        $this->blade = $blade;
    }
    public function index() {
        $students = $this->student->all();
        // Fix 3: Use the standard Blade make()->render() syntax
        echo $this->blade->make('students.index', ['students' => $students])->render();
    }

    public function create() {
        echo $this->blade->make('students.create')->render();
    }

    public function store() {
        $this->student->create($_POST['name'], $_POST['email'], $_POST['course']);
        header("Location: index.php");
        exit(); // Always use exit after a header redirect
    }

    public function edit($id) {
        $student = $this->student->find($id);
        echo $this->blade->make('students.edit', ['student' => $student])->render();
    }

    public function update($id) {
        $this->student->update($id, $_POST['name'], $_POST['email'], $_POST['course']);
        header("Location: index.php");
        exit();
    }

    public function delete($id) {
        $this->student->delete($id);
        header("Location: index.php");
        exit();
    }
}