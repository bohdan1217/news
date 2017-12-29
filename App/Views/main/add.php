{% extends "layout.html" %}

{% block body %}
<div class="container">
    <div class="row">
        <h1 class="h1-main" >Add new news</h1>
        <div class="col-md-10 col-md-offset-1">
            <form method="POST" role="form" class="add-book-form" enctype="multipart/form-data" action="/news/add">
                <div class="form-group">
                    <label for="name">Name of news</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name of news">
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Author">
                </div>

                <div class="form-group text-a">
                    <label for="text">Text</label>
                    <textarea class="form-control" rows="3" id="text_area"></textarea>
                    <input type="text" class="hidden" name="text">
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="file" name="file">
                </div>
                <button type="submit" class="btn btn-primary btn_add">Add</button>
            </form>
        </div>
    </div>
</div>



{% endblock %}
