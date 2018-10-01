<?php
	
	namespace App\Http\Controllers;
	
	use App\Model\Book;
	use App\Model\Categori;
	use App\Model\Oder;
	use App\Model\Student;
	
	class LibraryController extends Controller
	{
		
		
		public function getAllTableBook()
		{
			$book = new Book();
			$table = "books";
			$books = $book->getAll($table);
			return view('book', ['books' => $books]);
		}
		
		public function getAllTableStudent()
		{
			$student = new Student();
			$table = "students";
			$students = $student->getAll($table);
			return view('student', ['students' => $students]);
		}
		
		public function getAllTableCategori()
		{
			$category = new Categori();
			$table = "categories";
			$categories = $category->getAll($table);
			return view('category', ['categories' => $categories]);
		}
		
		public function getAllTableOder()
		{
			$oder = new Oder();
			$table = "borrows_oder";
			$oders = $oder->getAll($table);
			return view('oder', ['oders' => $oders]);
		}
	}
