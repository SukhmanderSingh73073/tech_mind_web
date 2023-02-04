<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolSetRequest;
use App\Http\Requests\SchoolStoreRequest;
use App\Http\Requests\SchoolUpdateRequest;
use App\Models\School;
use App\Models\User;
use App\Services\School\SchoolService;
use Illuminate\Http\Response;
use Spatie\Permission\Models\Role;

class SchoolController extends Controller
{
    /**
     * @var SchoolService
     */
    public $school;

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function testing()
    {
        $admin = Role::where('name', 'admin')->first();
          
        $user = User::where('name' ,"admin")->first() ;
        
        $getUsers = $user-> hasPermission("header-administrate");
        return Response::json($getUsers);


        $admin->givePermissionTo([
             'header-administrate',
            // 'header-academics',
            // 'menu-section',
            // 'menu-class',
            // 'menu-student',
            // 'menu-teacher',
            // 'menu-academic-year',
            // 'menu-subject',
            // 'menu-syllabus',
            // 'menu-timetable',
            // 'menu-semester',
            // 'menu-exam',
            // 'menu-grade-system',
            // 'menu-notice',
            // 'menu-parent',
            // 'menu-account-application',
            // 'manage school settings',
            // 'create section',
            // 'read section',
            // 'update section',
            // 'delete section',
            // 'create class',
            // 'read class',
            // 'update class',
            // 'delete class',
            // 'create class group',
            // 'read class group',
            // 'update class group',
            // 'delete class group',
            // 'create student',
            // 'read student',
            // 'update student',
            // 'delete student',
            // 'create academic year',
            // 'read academic year',
            // 'update academic year',
            // 'delete academic year',
            // 'set academic year',
            // 'create teacher',
            // 'read teacher',
            // 'update teacher',
            // 'delete teacher',
            // 'create subject',
            // 'read subject',
            // 'update subject',
            // 'delete subject',
            // 'promote student',
            // 'read promotion',
            // 'reset promotion',
            // 'graduate student',
            // 'view graduations',
            // 'reset graduation',
            // 'create semester',
            // 'read semester',
            // 'update semester',
            // 'delete semester',
            // 'set semester',
            // 'create syllabus',
            // 'read syllabus',
            // 'update syllabus',
            // 'delete syllabus',
            // 'create timetable',
            // 'read timetable',
            // 'update timetable',
            // 'delete timetable',
            // 'create custom timetable item',
            // 'read custom timetable item',
            // 'update custom timetable item',
            // 'delete custom timetable item',
            // 'create exam',
            // 'read exam',
            // 'update exam',
            // 'delete exam',
            // 'create grade system',
            // 'read grade system',
            // 'update grade system',
            // 'delete grade system',
            // 'create exam slot',
            // 'read exam slot',
            // 'update exam slot',
            // 'delete exam slot',
            // 'create exam record',
            // 'read exam record',
            // 'update exam record',
            // 'delete exam record',
            // 'create notice',
            // 'read notice',
            // 'update notice',
            // 'delete notice',
            // 'check result',
            // 'create parent',
            // 'read parent',
            // 'update parent',
            // 'delete parent',
            // 'read applicant',
            // 'update applicant',
            // 'delete applicant',
            // 'change account application status',
        ]);

        dd("d") ;
       
    }


    
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editSchools()
    {
        return view('pages.school.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function permissionSchools()
    {
        return view('pages.school.index');
    }

    /**
     * SchoolController constructor.
     *
     * @param SchoolService $school
     */
    public function __construct(SchoolService $school)
    {
        $this->school = $school;
        $this->authorizeResource(School::class, 'school');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.school.index');
    }


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function permissionSchool()
    {
        return view('pages.school.index');
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.school.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SchoolStoreRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(SchoolStoreRequest $request)
    {
        $data = $request->except('_token');
        $this->school->createSchool($data);

        return back()->with('success', __('School created successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param School $school
     *
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        $data['school'] = $school;

        return view('pages.school.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param School $school
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        $data['school'] = $school;

        return view('pages.school.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SchoolUpdateRequest $request
     * @param School              $school
     *
     * @return \Illuminate\Http\Response
     */
    public function update(SchoolUpdateRequest $request, School $school)
    {
        $data = $request->except('_token', '_method');
        $this->school->updateSchool($school, $data);

        return back()->with('success', __('School updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param School $school
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $this->school->deleteSchool($school);

        return back()->with('success', __('School deleted successfully'));
    }

    /**
     * Get settings for authenticated user's school.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function settings()
    {
        return redirect()->route('schools.edit', ['school' => auth()->user()->school_id]);
    }

    /**
     * Set the school.
     *
     * @param SchoolSetRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setSchool(SchoolSetRequest $request)
    {
        $this->authorize('setSchool', School::class);

        $schoolId = $request->input('school_id');
        $school = School::findOrFail($schoolId);

        $this->school->setSchool($school);

        return back()->with('success', __('School set successfully'));
    }
}
