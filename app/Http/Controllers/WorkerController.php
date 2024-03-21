<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WorkerController extends Controller
{
  protected function index()
  {
    $workers = Worker::all();
    return view('worker', compact('workers'));
  }


  protected function  addWorkerPage()
  {
    return view('add-worker-page');
  }

  protected function workerQosiw(Request $request)
  {
    $validate = $request->validate([
      'name' => 'required|min:3|max:50',
      'surname' => 'required|min:3|max:50',
      'phone' => 'required|min:9|max:13|unique:workers',
      'salary' => 'required'
    ]);

    Worker::create([
      'name' => $request->name,
      'surname' => $request->surname,
      'phone' => $request->phone,
      'salary' => $request->salary
    ]);


    Session::flash('id', true);
    return redirect()->route('add-worker-page');
  }


  protected function delete($id)
  {
    Worker::destroy($id);
    return back();
  }

  protected function updateWorker($id)
  {
    $worker = Worker::find($id);
    return view('update-worker-page', compact('worker'));
  }


  protected function editWorker(Request $request)
  {
    $validate = $request->validate([
      'id' => 'required',
      'name' => 'required',
      'surname' => 'required',
      'phone' => 'required|min:9|max:13',
      'salary' => 'required'
    ]);
    $id = $request->id;
    $worker = Worker::find($id);
    $worker->update([
      'name' => $request->name,
      'surname' => $request->surname,
      'phone' => $request->phone,
      'salary' => $request->salary
    ]);
    Session::flash('edit-worker', true);
    return back();
  }

  protected function profile()
  {

    return view('profile');
  }
}
