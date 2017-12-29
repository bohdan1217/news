{% extends "layout.html" %}

{% block body %}
<div class="container">
    <div class="row">

        <h1 class="h1-main">News</h1>

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Panel Heading</h3>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <a type="button" href="/news/add" class="btn btn-sm btn-primary btn-create">Add New news</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    {% if news %}
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                        <tr>
                            <th><em class="fa fa-cog"></em></th>
                            <th class="hidden-xs">ID</th>
                            <th>Name of news</th>
                            <th>Text</th>
                            <th>Author</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for new in news %}
                        <tr class="news-note" id="news_{{new.id}}">
                            <td align="center">
                                <a class="btn btn-default" href="news/edit/{{new.id}}"><em class="fa fa-pencil"></em></a>
                                <a class="btn btn-danger delete" href="#" data-item="{{new.id}}"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs">{{ new.id}}</td>
                            <td><a href="news/show/{{new.id}}">{{ new.name}}</a></td>
                            <td class="dot-ellipsis dot-height-65">{{ new.text | raw }}</td>
                            <td>{{ new.author}}</td>
                            <td>{{ new.date}}</td>
                        </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                    {% else %}
                    <p class="no-news">No news</p>
                    {% endif %}
                </div>
            </div>

        </div></div></div>
{% endblock %}
