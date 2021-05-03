<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{
    public function index() {
			// get data from database
			$notes = Notes::all();
			return view('get.index', ['notes' => $notes]);
		}

		public function create() {
			return view('post.index');
		}

		public function store() {
			
			$noteEntry = new Notes();

			$noteEntry->title = request('title');
			$noteEntry->note = request('note');

			$noteEntry->save();

			return redirect('notes/display');
		}

		public function retrieve($id) {
			$noteEntry = Notes::where('id', $id)->get();
			return view('get.edit', ['note' => $noteEntry]);
		}

		public function update(Request $req) {
			$action = $req->input('action');

			if ($action == 'update') {
			
			$noteEntry = Notes::find($req->id);			
			$noteEntry->title = request('title');
			$noteEntry->note = request('note');

			$noteEntry->save();

			return redirect('notes/display');
			}
		}

		public function delete(Request $req) {
			$action = $req->input('action');

			if ($action == 'delete') {
				$noteEntry = Notes::find($req->id);
				$noteEntry->delete();
				return redirect('notes/display');

			}
		}
}
