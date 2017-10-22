@extends('back.template')

@section('main')

  @include('back.partials.entete', ['title' => "Daftar Barang" . link_to_route('blog.create', "Tambah Barang", [], ['class' => 'btn btn-info pull-right']), 'icon' => 'pencil', 'fil' => "Tambah"])

    @if(session()->has('ok'))
        @include('partials/error', ['type' => 'success', 'message' => session('ok')])
    @endif

  <div class="row col-lg-12">
    <div class="pull-right link">{!! $links !!}</div>
  </div>

  <div class="row col-lg-12">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>
              {{"Nama Barang"}} 
              <a href="#" name="posts.title" class="order">
                <span class="fa fa-fw fa-{{ $order->name == 'posts.title' ? $order->sens : 'unsorted'}}"></span>
              </a>
            </th>
            <th>
              {{"Kategori"}}
              <a href="#" name="posts.created_at" class="order">
                <span class="fa fa-fw fa-{{ $order->name == 'posts.created_at' ? $order->sens : 'unsorted'}}"></span>
              </a>
            </th>
            <th>
                {{"Jumlah Barang"}}
                <a href="#" name="posts.active" class="order">
                <span class="fa fa-fw fa-{{ $order->name == 'posts.active' ? $order->sens : 'unsorted'}}"></span>
                </a>
            </th><th>
                {{"Harga Satuan"}}
                <a href="#" name="username" class="order">
                <span class="fa fa-fw fa-{{ $order->name == 'username' ? $order->sens : 'unsorted'}}"></span>
                </a>
            </th>
          </tr>
        </thead>
        <tbody>
          @include('back.blog.table')
        </tbody>
      </table>
    </div>
  </div>

  <div class="row col-lg-12">
    <div class="pull-right link">{!! $links !!}</div>
  </div>

@endsection