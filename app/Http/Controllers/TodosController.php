<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
	public function index(){

		$todos = Todo::all();

		dump($todos);

		return view('todos.index')->with('todos', $todos);
	}

	public function show(Todo $todo){

		// $todo = Todo::find($id);

		return view('todos.show')->with('todo', $todo);
	}

	public function create(){

		return view('todos.create');
	}

	public function store(){

		$this->validate(request(), [
			'name' => 'required',
			'description' => 'required'
		]);

		$data = request()->all();

		$todo = new Todo();

		$todo->name = $data['name'];
		$todo->description = $data['description'];
		$todo->completed = false;


		$todo->save();

		session()->flash('success', 'Todo create successfully');
	

		return redirect('/todos');

	}	

	public function edit(Todo $todo){

		// $todo = Todo::find($id);

		return view('todos.edit')->with('todo', $todo);

	}

	public function update($id){

		$this->validate(request(), [
			'name' => 'required',
			'description' => 'required'
		]);

		$data = request()->all();

		$todo = Todo::find($id);

		$todo->name = $data['name'];
		$todo->description = $data['description'];

		$todo->save();

		session()->flash('success', 'Todo update successfully');
	

		return redirect('/todos');

	}

	public function destroy(Todo $todo){

		// $todo = Todo::find($id);

		$todo->delete();

		session()->flash('success', 'Todo delete successfully');
	

		return redirect('/todos');
	}

	public function complete(Todo $todo){

		$todo->completed = true;

		$todo->save();

		session()->flash('success', 'Todo comleted');

		return redirect('/todos');
	}
    
}
