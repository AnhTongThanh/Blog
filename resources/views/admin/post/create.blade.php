@extends('layouts.master')

@section('title', 'Add Posts')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Add Posts 
                <a href="{{ url('admin/add-post') }}" class="btn btn-primary float-end">Add Posts</a>
            </h4>
        </div>
        <div class="card-body">

            <form action="" method="POST">
                <div class="mb-3">
                    <label for="">Category</label>
                    <select name="" class="form-control">
                        <option value=""></option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Post Name</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Youtube Iframe Link</label>
                    <input type="text" name="yt_iframe" class="form-control" />
                </div>

                <h4>SEO Tags</h4>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Meta Keyword</label>
                    <textarea name="meta_keyword" class="form-control" rows="4"></textarea>
                </div>
                
                <h6>Status</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary float-end">Save Post</button>
                    </div>
            </form>

        </div>
    </div>

</div>

@endsection