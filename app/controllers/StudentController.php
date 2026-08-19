<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['student_access'] = true;

        $student = [
            'student_id' => 'MCC2024-01566',
            'name' => 'ARCIAGA, CHLARIZZE RHIO D.',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'F6',
            'email' => 'arciagachlarizzerhio@gmail.com'
        ];

        $this->call->view('student_home', $student);
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-01566',
            'name' => 'ARCIAGA, CHLARIZZE RHIO D.',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'F6',
            'email' => 'arciagachlarizzerhio@gmail.com'
        ];

        $this->call->view('student_profile', $student);
    }
}