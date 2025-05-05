<!-- filepath: resources/views/course.blade.php -->
@extends('layout')

@section('title', $course_title ?? 'Course Page')

@section('content')
    <div class="course-container">
        <h1>{{ $course_title ?? 'Course Title' }}</h1>
        
        <div class="course-description">
            @if(isset($course_description))
                <p>{{ $course_description }}</p>
            @else
                <p>This is a comprehensive course designed to help you master new skills.</p>
            @endif
        </div>
        
        <div class="course-modules">
            <h2>Course Modules</h2>
            @if(isset($modules) && count($modules) > 0)
                <ul>
                    @foreach($modules as $module)
                        <li>{{ $module }}</li>
                    @endforeach
                </ul>
            @else
                <p>No modules available for this course yet.</p>
            @endif
        </div>
    </div>
@endsection