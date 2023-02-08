<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * Create all permissions.
         *
         * EVERYTHING HERE IS USED IN A SINGULAR SENSE
         */

        // Permissions for school

      
 $permissions = [
           
    ['name' => 'create school',],
    ['name' => 'read school',],
    ['name' => 'update school',],
    ['name' => 'delete school',],
    ['name' => 'manage school settings',],
    ['name' => 'create class group',],
    ['name' => 'read class group',],
    ['name' => 'update class group',],
    ['name' => 'delete class group',],
    ['name' => 'create class',],
    ['name' => 'read class',],
    ['name' => 'update class',],
    ['name' => 'update class',],
    ['name' => 'delete class',],
    ['name' => 'create section',],
    ['name' => 'read section',],
    ['name' => 'update section',],
    ['name' => 'delete section',],
    ['name' => 'create student',],
    ['name' => 'read student',],
    ['name' => 'update student',],
    ['name' => 'delete student',],
    ['name' => 'withdraw student',],
    ['name' => 'create academic year',],
    ['name' => 'read academic year',],
    ['name' => 'update academic year',],
    ['name' => 'delete academic year',],
    ['name' => 'set academic year',],
    ['name' => 'create teacher',],
    ['name' => 'read teacher',],
    ['name' => 'update teacher',],
    ['name' => 'delete teacher',],
    ['name' => 'read role asignment',],
    ['name' => 'create parent',],
    ['name' => 'read parent',],
    ['name' => 'update parent',],
    ['name' => 'delete parent',],
    ['name' => 'create subject',],
    ['name' => 'read subject',],
    ['name' => 'update subject',],
    ['name' => 'delete subject',],
    ['name' => 'promote student',],
    ['name' => 'read promotion',],
    ['name' => 'reset promotion',],
    ['name' => 'graduate student',],
    ['name' => 'view graduations',],
    ['name' => 'reset graduation',],
    ['name' => 'create semester',],
    ['name' => 'read semester',],
    ['name' => 'update semester',],
    ['name' => 'delete semester',],
    ['name' => 'set semester',],
    ['name' => 'create syllabus',],
    ['name' => 'read syllabus',],
    ['name' => 'update syllabus',],
    ['name' => 'delete syllabus',],
    ['name' => 'create timetable',],
    ['name' => 'read timetable',],
    ['name' => 'update timetable',],
    ['name' => 'delete timetable',],
    ['name' => 'create custom timetable item',],
    ['name' => 'read custom timetable item',],
    ['name' => 'update custom timetable item',],
    ['name' => 'delete custom timetable item',],
    ['name' => 'create exam',],
    ['name' => 'read exam',],
    ['name' => 'update exam',],
    ['name' => 'delete exam',],
    ['name' => 'exam type',],
    ['name' => 'exam schea',],
    ['name' => 'exam admit card',],
    ['name' => 'exam desk slip',],
    ['name' => 'exam result sheet',],
    ['name' => 'exam marksheet',],
    ['name' => 'exam tc form',],
    ['name' => 'exam tc',],
    ['name' => 'exam character certificate',],
    ['name' => 'create grade system',],
    ['name' => 'read grade system',],
    ['name' => 'update grade system',],
    ['name' => 'delete grade system',],
    ['name' => 'create exam slot',],
    ['name' => 'read exam slot',],
    ['name' => 'update exam slot',],
    ['name' => 'delete exam slot',],
    ['name' => 'create exam record',],
    ['name' => 'read exam record',],
    ['name' => 'update exam record',],
    ['name' => 'delete exam record',],
    ['name' => 'check result',],
    ['name' => 'create notice',],
    ['name' => 'read notice',],
    ['name' => 'update notice',],
    ['name' => 'delete notice',],
    ['name' => 'read applicant',],
    ['name' => 'update applicant',],
    ['name' => 'delete applicant',],
    ['name' => 'change account application status',],
    ['name' => 'header-administrate',],
    ['name' => 'header-schools',],
    ['name' => 'header-academics',],
    ['name' => 'menu-class',],
    ['name' => 'menu-section',],
    ['name' => 'menu-student',],
    ['name' => 'menu-teacher',],
    ['name' => 'menu-parent',],
    ['name' => 'menu-academic-year',],
    ['name' => 'menu-semester',],
    ['name' => 'menu-subject',],
    ['name' => 'menu-syllabus',],
    ['name' => 'menu-timetable',],
    ['name' => 'menu-exam',],
    ['name' => 'menu-grade-system',],
    ['name' => 'menu-notice',],
    ['name' => 'menu-account-application',],
    ['name' => 'menu-attendance',],
    ['name' => 'menu-documents',],
    
    
    ['name' => 'read admin',],
    ['name' => 'create admin',],
    ['name' => 'edit admin',],
    ['name' => 'delete admin',],
    ['name' => 'permission admin',],
    ['name' => 'read attendance',],
    ['name' => 'create attendance',],
    ['name' => 'edit attendance',],
    ['name' => 'delete attendance',],
    ['name' => 'read attendance register',],
    ['name' => 'create attendance register',],
    ['name' => 'edit attendance register',],
    ['name' => 'delete attendance register',],
    ['name' => 'read staff attendance',],
    ['name' => 'create staff attendance',],
    ['name' => 'edit staff attendance',],
    ['name' => 'delete staff attendance',],
    ['name' => 'read student attendance',],
    ['name' => 'create student attendance',],
    ['name' => 'edit student attendance',],
    ['name' => 'delete student attendance',],
    ['name' => 'read documents',],
    ['name' => 'create documents',],
    ['name' => 'edit documents',],
    ['name' => 'delete documents',],
    ['name' => 'read collage documents',],
    ['name' => 'create collage documents',],
    ['name' => 'edit collage documents',],
    ['name' => 'delete collage documents',],
    ['name' => 'read print documents',],
    ['name' => 'create print documents',],
    ['name' => 'edit print documents',],
    ['name' => 'delete print documents',],
    ['name' => 'read fees',],
    ['name' => 'create fees',],
    ['name' => 'edit fees',],
    ['name' => 'delete fees',],
    ['name' => 'read class work',],
    ['name' => 'create class work',],
    ['name' => 'edit class work',],
    ['name' => 'delete class work',],
    ['name' => 'read home work',],
    ['name' => 'create home work',],
    ['name' => 'edit home work',],
    ['name' => 'delete home work',],
    ['name' => 'read salary',],
    ['name' => 'create salary',],
    ['name' => 'edit salary',],
    ['name' => 'delete salary',],
    
            
        ];


        foreach ($permissions as $permission) {
            Permission::updateOrCreate(
                ['name' => $permission['name']],
                $permission
            );
        }





        /**
         * assign permissions to roles.
         */
         // assign permission to super-admin
         $local_super_admin = Role::where('name', 'local-super-admin')->first();
         $local_super_admin->givePermissionTo([

            'read admin',
            'create admin',
            'edit admin',
            'delete admin',
            'permission admin',
            'create school',
            'read school',
            'update school',
            'delete school' ,
            'collage documents',
            'print documents' ,
            'read finance' ,
            'read software plan' ,
            'read payment plan' ,

         ]) ;  

 // assign permission to sub-super-admin
 $sub_super_admin = Role::where('name', 'sub-super-admin')->first();
 $sub_super_admin->givePermissionTo([

    'read self profile',
    'create attendance',
    'create school',
    'read school',
    'collage documents',
    'print documents' ,
    
 ]) ; 

 // assign permission to Manager
 $manager = Role::where('name', 'manager')->first();
 $manager->givePermissionTo([

    'read self profile',
    'read collage profile',
    'create attendance',
    'create teacher' ,
    'read teacher' ,
    'read role asignment' ,
    'create student',
    'read student',
    'withdraw student',
    'create class',
    'create section',
    'read promotion',
    'reset promotion',
    
    'create staff attendance',
    'staff attendance register',
       
    'create student attendance',
    'student attendance register',
    'create fees chart' ,
    'fees consession' ,
    'fees collection' ,
    'read fees',
    'create timetable',
    'read timetable',

    'create root',
    'read root',
    'create root fees',
    'read root fees',
    'asign driver' ,
    'read root students' ,
    'incoming finance',
    'expences finance',
    
    'read salary',
    'create salary',
    'distribute salary' ,

    'exam type' ,
    'exam scheam',
    'exam admit card' ,
    'exam desk slip' ,
    'exam result sheet' ,
    'exam marksheet',
    'exam tc form',
    'exam tc',
    'exam character certificate',
    'read software plan' ,
    'read payment plan' ,
    
 ]) ; 


        //assign permissions to admin
        $admin = Role::where('name', 'admin')->first();
        $admin->givePermissionTo([
            'header-administrate',
            'header-academics',
            'menu-section',
            'menu-class',
            'menu-student',
            'menu-teacher',
            'menu-academic-year',
            'menu-subject',
            'menu-syllabus',
            'menu-timetable',
            'menu-semester',
            'menu-exam',
            'menu-grade-system',
            'menu-notice',
            'menu-parent',
            'menu-account-application',
            'manage school settings',
            'create section',
            'read section',
            'update section',
            'delete section',
            'create class',
            'read class',
            'update class',
            'delete class',
            'create class group',
            'read class group',
            'update class group',
            'delete class group',
            'create student',
            'read student',
            'update student',
            'delete student',
            'create academic year',
            'read academic year',
            'update academic year',
            'delete academic year',
            'set academic year',
            'create teacher',
            'read teacher',
            'update teacher',
            'delete teacher',
            'create subject',
            'read subject',
            'update subject',
            'delete subject',
            'promote student',
            'read promotion',
            'reset promotion',
            'graduate student',
            'view graduations',
            'reset graduation',
            'create semester',
            'read semester',
            'update semester',
            'delete semester',
            'set semester',
            'create syllabus',
            'read syllabus',
            'update syllabus',
            'delete syllabus',
            'create timetable',
            'read timetable',
            'update timetable',
            'delete timetable',
            'create custom timetable item',
            'read custom timetable item',
            'update custom timetable item',
            'delete custom timetable item',
            'create exam',
            'read exam',
            'update exam',
            'delete exam',
            'create grade system',
            'read grade system',
            'update grade system',
            'delete grade system',
            'create exam slot',
            'read exam slot',
            'update exam slot',
            'delete exam slot',
            'create exam record',
            'read exam record',
            'update exam record',
            'delete exam record',
            'create notice',
            'read notice',
            'update notice',
            'delete notice',
            'check result',
            'create parent',
            'read parent',
            'update parent',
            'delete parent',
            'read applicant',
            'update applicant',
            'delete applicant',
            'change account application status',
        ]);

        //assign permissions to teacher
        $teacher = Role::where('name', 'teacher')->first();
        $teacher->givePermissionTo([
            'header-academics',
            'menu-syllabus',
            'menu-timetable',
            'menu-exam',
            'menu-notice',
            'create syllabus',
            'read syllabus',
            'update syllabus',
            'delete syllabus',
            'create timetable',
            'read timetable',
            'update timetable',
            'delete timetable',
            'create exam record',
            'read exam record',
            'update exam record',
            'delete exam record',
            'read notice',
            'check result',
        ]);

        //assign permissions to student
        $student = Role::where('name', 'student')->first();
        $student->givePermissionTo([
            'menu-attendance' ,
            'read attendance' ,
            'header-academics',
            'menu-syllabus',
            'menu-timetable',
            'menu-notice',
            'menu-exam',
            'read syllabus',
            'read timetable',
            'read notice',
            'check result',
        ]);
        //assign permissions to parent
        $parent = Role::where('name', 'parent')->first();
        $parent->givePermissionTo([
            'header-academics',
            'menu-syllabus',
            'menu-timetable',
            'menu-notice',
            'menu-exam',
            'read syllabus',
            'read timetable',
            'read notice',
            'check result',
        ]);

        //assign permissions to librarian
        //assign permissions to accountant









//         Permission::firstOrCreate([
//             'name' => 'create school',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read school',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update school',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete school',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'manage school settings',
//         ]);

//         // Permissions for class group
//         Permission::firstOrCreate([
//             'name' => 'create class group',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read class group',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update class group',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete class group',
//         ]);

//         // Permissions for class
//         Permission::firstOrCreate([
//             'name' => 'create class',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read class',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update class',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete class',
//         ]);

//         // Permissions for sectionm
//         Permission::firstOrCreate([
//             'name' => 'create section',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read section',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update section',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete section',
//         ]);

//         //Permission for students
//         Permission::firstOrCreate([
//             'name' => 'create student',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read student',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update student',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete student',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'withdraw student',
//         ]);
        
//         //Permission for academic year
//         Permission::firstOrCreate([
//             'name' => 'create academic year',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read academic year',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update academic year',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete academic year',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'set academic year',
//         ]);

//         //Permission for teacher
//         Permission::firstOrCreate([
//             'name' => 'create teacher',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read teacher',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update teacher',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete teacher',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read role asignment',
//         ]);
        
//         //Permission for parent
//         Permission::firstOrCreate([
//             'name' => 'create parent',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read parent',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update parent',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete parent',
//         ]);

//         //Permission for subject
//         Permission::firstOrCreate([
//             'name' => 'create subject',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read subject',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update subject',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete subject',
//         ]);

//         //Permission for student promotions
//         Permission::firstOrCreate([
//             'name' => 'promote student',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read promotion',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'reset promotion',
//         ]);

//         //permission for graduation
//         Permission::firstOrCreate([
//             'name' => 'graduate student',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'view graduations',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'reset graduation',
//         ]);

//         //permission for semesters
//         Permission::firstOrCreate([
//             'name' => 'create semester',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read semester',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update semester',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete semester',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'set semester',
//         ]);

//         //permission for syllabus
//         Permission::firstOrCreate([
//             'name' => 'create syllabus',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read syllabus',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update syllabus',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete syllabus',
//         ]);

//         //permission for timetable
//         Permission::firstOrCreate([
//             'name' => 'create timetable',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read timetable',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update timetable',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete timetable',
//         ]);

//         //custom timetable item
//         Permission::firstOrCreate([
//             'name' => 'create custom timetable item',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read custom timetable item',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update custom timetable item',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete custom timetable item',
//         ]);

//         //exam permissions
//         Permission::firstOrCreate([
//             'name' => 'create exam',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read exam',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update exam',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete exam',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'exam type',
//         ]);


//         Permission::firstOrCreate([
//             'name' => 'exam scheam',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'exam admit card',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'exam desk slip',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'exam result sheet',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'exam marksheet',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'exam tc form',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'exam tc',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'exam character certificate',
//         ]);
        

//         //permission for grade system
//         Permission::firstOrCreate([
//             'name' => 'create grade system',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read grade system',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update grade system',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete grade system',
//         ]);

//         //permission for exam slots
//         Permission::firstOrCreate([
//             'name' => 'create exam slot',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read exam slot',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update exam slot',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete exam slot',
//         ]);

//         //permission for exam records
//         Permission::firstOrCreate([
//             'name' => 'create exam record',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'read exam record',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'update exam record',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete exam record',
//         ]);




//         //check result permission
//         Permission::firstOrCreate([
//             'name' => 'check result',
//         ]);

//         //permission for notices

//         Permission::firstOrCreate([
//             'name' => 'create notice',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'read notice',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'update notice',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'delete notice',
//         ]);

//         //permission for applicant
//         Permission::firstOrCreate([
//             'name' => 'read applicant',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'update applicant',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'delete applicant',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'change account application status',
//         ]);

//         //header permissions (for controlling the menu headers)
//         Permission::firstOrCreate([
//             'name' => 'header-administrate',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'header-schools',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'header-academics',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'menu-class',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'menu-section',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'menu-student',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'menu-teacher',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'menu-parent',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'menu-academic-year',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'menu-semester',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'menu-subject',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'menu-syllabus',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'menu-timetable',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'menu-exam',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'menu-grade-system',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'menu-notice',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'menu-account-application',
//         ]);






//          //permission for admins
//          Permission::firstOrCreate([
//             'name' => 'read admin',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'create admin',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'edit admin',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete admin',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'permission admin',
//         ]);

        

//           //permission for Attendance
//           Permission::firstOrCreate([
//             'name' => 'read attendance',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'create attendance',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'edit attendance',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete attendance',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'attendance register',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'read staff attendance',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'create staff attendance',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'edit staff attendance',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete staff attendance',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'staff attendance register',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'read student attendance',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'create student attendance',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'edit student attendance',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete student attendance',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'student attendance register',
//         ]);


//           //permission for Documents
//           Permission::firstOrCreate([
//             'name' => 'read documents',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'create documents',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'edit documents',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'delete documents',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'collage documents',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'print documents',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'collage logo',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'collage sign',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'collage manager',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'collage teachers',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'collage exam incharge',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'collage office incharge',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'collage icard',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'collage fees card',
//         ]);

//         Permission::firstOrCreate([
//             'name' => 'collage scheam',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'collage admit card',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'collage number sheet',
//         ]);
//         Permission::firstOrCreate([
//             'name' => 'collage mark sheet',
//         ]);

//        //permission for Finance
//        Permission::firstOrCreate([
//         'name' => 'read finance',
//     ]);
//     Permission::firstOrCreate([
//         'name' => 'incoming finance',
//     ]);
//     Permission::firstOrCreate([
//         'name' => 'expences finance',
//     ]);

//     //permission for Software Plan
//     Permission::firstOrCreate([
//         'name' => 'read software plan',
//     ]);

    


//     //permission for Payment Plan
//     Permission::firstOrCreate([
//         'name' => 'read payment plan',
//     ]);
// //permission for Profile
// Permission::firstOrCreate([
//     'name' => 'read self profile',
// ]);
// Permission::firstOrCreate([
//     'name' => 'read collage profile',
// ]);


// //permission for Fees
// Permission::firstOrCreate([
//     'name' => 'read fees',
// ]);

// Permission::firstOrCreate([
//     'name' => 'create fees',
// ]);
// Permission::firstOrCreate([
//     'name' => 'edit fees',
// ]);

// Permission::firstOrCreate([
//     'name' => 'delete fees',
// ]);

// Permission::firstOrCreate([
//     'name' => 'create fees chart',
// ]);
// Permission::firstOrCreate([
//     'name' => 'fees consession',
// ]);

// Permission::firstOrCreate([
//     'name' => 'fees collection',
// ]);



// //permission for Transport
// Permission::firstOrCreate([
//     'name' => 'read root',
// ]);

// Permission::firstOrCreate([
//     'name' => 'create root',
// ]);
// Permission::firstOrCreate([
//     'name' => 'edit root',
// ]);

// Permission::firstOrCreate([
//     'name' => 'delete root',
// ]);


// //permission for Transport
// Permission::firstOrCreate([
//     'name' => 'read root fees',
// ]);

// Permission::firstOrCreate([
//     'name' => 'create root fees',
// ]);
// Permission::firstOrCreate([
//     'name' => 'edit root fees',
// ]);

// Permission::firstOrCreate([
//     'name' => 'delete root fees',
// ]);

// Permission::firstOrCreate([
//     'name' => 'asign driver',
// ]);

// Permission::firstOrCreate([
//     'name' => 'read root students',
// ]);



// //permission for Work
// Permission::firstOrCreate([
//     'name' => 'read class work',
// ]);
// Permission::firstOrCreate([
//     'name' => 'manage class work',
// ]);

// Permission::firstOrCreate([
//     'name' => 'read home work',
// ]);
// Permission::firstOrCreate([
//     'name' => 'manage home work',
// ]);

// //permission for salary
// Permission::firstOrCreate([
//     'name' => 'read salary',
// ]);

// Permission::firstOrCreate([
//     'name' => 'create salary',
// ]);

// Permission::firstOrCreate([
//     'name' => 'edit salary',
// ]);
// Permission::firstOrCreate([
//     'name' => 'delete salary',
// ]);

// Permission::firstOrCreate([
//     'name' => 'distribute salary',
// ]);


    }
}
