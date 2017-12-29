{% extends "layout.html" %}

{% block body %}
<div class="container">
    <div class="row">
        <h1 class="h1-main" style="">Edit book - {{ new.name}}</h1>
        <div class="col-md-10 col-md-offset-1">
            <form method="POST" role="form" class="edit-book-form" enctype="multipart/form-data" action="/news/edit">
                <input type="text" class="hidden" name="id" value="{{new.id}}">
                <div class="form-group">
                    <label for="name">Name of news</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name of news" value="{{ new.name}}">
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Author" value="{{ new.author}}">
                </div>

                <div class="form-group text-a">
                    <label for="text">Text</label>
                    <textarea class="form-control" rows="3" id="text_area" name="text">{{ new.text}}</textarea>
                    <input type="text" class="hidden" name="text">
                </div>


                {% if new["img"] %}
                <div class="form-group">
                    <label for="old_image">Old image</label>
                    <div class="img-edit">
                        <img src='/assets/img/{{new["img"]}}' alt='{{ new["name"]}}' title='{{ new["name"]}}'>
                        <input type="text" name="old_image" value='{{new["img"]}}' class="hidden">
                    </div>
                </div>
                {% endif %}

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="file" name="file">
                </div>
                <button type="submit" class="btn btn-primary btn_add">Update</button>
            </form>
        </div>
    </div>
</div>



{% endblock %}
