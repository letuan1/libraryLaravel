<?php
	
	namespace App\Http\Controllers;
	use DB;
	use App\Model\Book;
	use App\Model\Categori;
	use App\Model\Oder;
	use App\Model\Student;
	
	class LibraryController extends Controller
	{
		
		
		public function getAllTableBook()
		{
			$books = Book::all();
			return view('book', ['books' => $books]);
		}
		
		public function getAllTableStudent()
		{
			$students = Student::all();
			return view('student', ['students' => $students]);
		}
		
		public function getAllTableCategori()
		{
			$categories = Categori::all();
			return view('category', ['categories' => $categories]);
		}
		
		public function getAllTableOder()
		{
			$oders = Oder::all();
			return view('oder', ['oders' => $oders]);
		}
		
	}
