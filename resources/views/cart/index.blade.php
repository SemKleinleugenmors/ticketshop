@extends('layouts.app')

@section('content')
  <section class="container mx-auto py-6">

    <section class="flex justify-between mb-6">
      <h2 class="text-4xl mb-4">Cart</h2>
      <a href="#" class="shadow text-blue-500 rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 text-white">Go to payment</a>
    </section>

    <table class="table-fixed w-full">
      <thead>
      <tr class="text-left">
        <th>Title</th>
        <th>Price</th>
        <th>Amount</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>Title</td>
        <td>10,-</td>
        <td>2</td>
        <td>
          <div class="flex">
            <form method="post" action="#">
              @csrf
              {{ method_field('DELETE') }}
              <button type="submit" class="inline-block shadow text-blue-500 rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 text-white">Remove</button>
            </form>
          </div>
        </td>
      </tr>
      </tbody>
    </table>
  </section>
@endsection
