{% extends "layout.html" %}

{% block body %}
<div class="container">
    <div class="row">

        <h1 class="h1-main">News - {{ new["name"]}}</h1>

        <div class="col-sm-12">
            <a type="button" href="/" class="btn btn-sm btn-primary btn-create">Main</a>
        </div>

        {% if new["img"] %}
        <div class="img-show">
            <img src='/assets/img/{{new["img"]}}' alt='{{ new["name"]}}' title='{{ new["name"]}}'>
        </div>
        {% endif %}
        <p class="text-in">{{ new["text"] | raw}}</p>

        <div class="row">
            <div class="col-sm-4">
                <p>Author: {{ new["author"]}}</p>
            </div>
            <div class="col-sm-6">
                <p>Data created: {{ new["date"]}}</p>
            </div>
        </div>
    </div>
</div>
{% endblock %}
