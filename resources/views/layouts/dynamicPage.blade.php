<?php
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

if (gettype($template) != 'string') {
    $template = json_encode($template);
}
$template = str_replace('"', "'", $template);
?>
@extends('layouts.app')

@section('content')
    <dynamic-component v-bind:component_infos="<?= $template ?>"></dynamic-component>
@endsection
