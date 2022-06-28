@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Title',
    ])
    @formField('input', [
        'name' => 'link',
        'label' => 'Link',
    ])
    @formField('input', [
        'name' => 'scripture',
        'label' => 'Scriptures',
    ])
    @formField('wysiwyg', [
        'name' => 'short_description',
        'label' => 'Short Description',
        'maxlength' => 100
    ])
    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Description',
        'editSource' => true,
    ])
    @formField('tags', [
        'label' => 'Tags',
    ])
@stop
