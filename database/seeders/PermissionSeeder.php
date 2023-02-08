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
    ["guard_name"  => 'web' , 'name' => 'header-administrate',],
    ["guard_name"  => 'web' , 'name' => 'header-schools',],
    ["guard_name"  => 'web' , 'name' => 'header-academics',],
    ["guard_name"  => 'web' , 'name' => 'menu-class',],
    ["guard_name"  => 'web' , 'name' => 'menu-section',],
    ["guard_name"  => 'web' , 'name' => 'menu-student',],
    ["guard_name"  => 'web' , 'name' => 'menu-teacher',],
    ["guard_name"  => 'web' , 'name' => 'menu-parent',],
    ["guard_name"  => 'web' , 'name' => 'menu-academic-year',],
    ["guard_name"  => 'web' , 'name' => 'menu-semester',],
    ["guard_name"  => 'web' , 'name' => 'menu-subject',],
    ["guard_name"  => 'web' , 'name' => 'menu-syllabus',],
    ["guard_name"  => 'web' , 'name' => 'menu-timetable',],
    ["guard_name"  => 'web' , 'name' => 'menu-exam',],
    ["guard_name"  => 'web' , 'name' => 'menu-grade-system',],
    ["guard_name"  => 'web' , 'name' => 'menu-notice',],
    ["guard_name"  => 'web' , 'name' => 'menu-account-application',],
    ["guard_name"  => 'web' , 'name' => 'menu-attendance',],
    ["guard_name"  => 'web' , 'name' => 'menu-documents',],
    ["guard_name"  => 'web' , 'name' => 'menu-fees',],
    ["guard_name"  => 'web' , 'name' => 'menu-transport',],
    ["guard_name"  => 'web' , 'name' => 'menu-finance',],
    ["guard_name"  => 'web' , 'name' => 'menu-staff',],
    ["guard_name"  => 'web' , 'name' => 'menu-class-work',],
    ["guard_name"  => 'web' , 'name' => 'menu-home-work',],
    ["guard_name"  => 'web' , 'name' => 'menu-salary',],
    ["guard_name"  => 'web' , 'name' => 'menu-library',],
    ["guard_name"  => 'web' , 'name' => 'menu-software-plan',],
    ["guard_name"  => 'web' , 'name' => 'menu-payment-plan',],
    
    


    ["guard_name"  => 'web' , 'name' => 'create staff-admin',],
    ["guard_name"  => 'web' , 'name' => 'read staff-admin',],
    ["guard_name"  => 'web' , 'name' => 'update staff-admin',],
    ["guard_name"  => 'web' , 'name' => 'delete staff-admin',],
    ["guard_name"  => 'web' , 'name' => 'create staff-manager',],
    ["guard_name"  => 'web' , 'name' => 'read staff-manager',],
    ["guard_name"  => 'web' , 'name' => 'update staff-manager',],
    ["guard_name"  => 'web' , 'name' => 'delete staff-manager',],
    ["guard_name"  => 'web' , 'name' => 'create staff-principle',],
    ["guard_name"  => 'web' , 'name' => 'read staff-principle',],
    ["guard_name"  => 'web' , 'name' => 'update staff-principle',],
    ["guard_name"  => 'web' , 'name' => 'delete staff-principle',],
    ["guard_name"  => 'web' , 'name' => 'create staff-incharge',],
    ["guard_name"  => 'web' , 'name' => 'read staff-incharge',],
    ["guard_name"  => 'web' , 'name' => 'update staff-incharge',],
    ["guard_name"  => 'web' , 'name' => 'delete staff-incharge',],
    ["guard_name"  => 'web' , 'name' => 'create staff-class-teacher',],
    ["guard_name"  => 'web' , 'name' => 'read staff-class-teacher',],
    ["guard_name"  => 'web' , 'name' => 'update staff-class-teacher',],
    ["guard_name"  => 'web' , 'name' => 'delete staff-class-teacher',],
    ["guard_name"  => 'web' , 'name' => 'create staff-teacher',],
    ["guard_name"  => 'web' , 'name' => 'read staff-teacher',],
    ["guard_name"  => 'web' , 'name' => 'update staff-teacher',],
    ["guard_name"  => 'web' , 'name' => 'delete staff-teacher',],
   

    ["guard_name"  => 'web' , 'name' => 'create school',],
    ["guard_name"  => 'web' , 'name' => 'read school',],
    ["guard_name"  => 'web' , 'name' => 'update school',],
    ["guard_name"  => 'web' , 'name' => 'delete school',],
    ["guard_name"  => 'web' , 'name' => 'create library',],
    ["guard_name"  => 'web' , 'name' => 'read library',],
    ["guard_name"  => 'web' , 'name' => 'update library',],
    ["guard_name"  => 'web' , 'name' => 'delete library',],
    
    ["guard_name"  => 'web' , 'name' => 'manage school settings',],
    ["guard_name"  => 'web' , 'name' => 'create class group',],
    ["guard_name"  => 'web' , 'name' => 'read class group',],
    ["guard_name"  => 'web' , 'name' => 'update class group',],
    ["guard_name"  => 'web' , 'name' => 'delete class group',],
    ["guard_name"  => 'web' , 'name' => 'create class',],
    ["guard_name"  => 'web' , 'name' => 'read class',],
    ["guard_name"  => 'web' , 'name' => 'update class',],
    ["guard_name"  => 'web' , 'name' => 'update class',],
    ["guard_name"  => 'web' , 'name' => 'delete class',],
    ["guard_name"  => 'web' , 'name' => 'create section',],
    ["guard_name"  => 'web' , 'name' => 'read section',],
    ["guard_name"  => 'web' , 'name' => 'update section',],
    ["guard_name"  => 'web' , 'name' => 'delete section',],
    ["guard_name"  => 'web' , 'name' => 'create student',],
    ["guard_name"  => 'web' , 'name' => 'read student',],
    ["guard_name"  => 'web' , 'name' => 'update student',],
    ["guard_name"  => 'web' , 'name' => 'delete student',],
    ["guard_name"  => 'web' , 'name' => 'withdraw student',],
    ["guard_name"  => 'web' , 'name' => 'create academic year',],
    ["guard_name"  => 'web' , 'name' => 'read academic year',],
    ["guard_name"  => 'web' , 'name' => 'update academic year',],
    ["guard_name"  => 'web' , 'name' => 'delete academic year',],
    ["guard_name"  => 'web' , 'name' => 'set academic year',],
    ["guard_name"  => 'web' , 'name' => 'create teacher',],
    ["guard_name"  => 'web' , 'name' => 'read teacher',],
    ["guard_name"  => 'web' , 'name' => 'update teacher',],
    ["guard_name"  => 'web' , 'name' => 'delete teacher',],
    ["guard_name"  => 'web' , 'name' => 'read role asignment',],
    ["guard_name"  => 'web' , 'name' => 'create parent',],
    ["guard_name"  => 'web' , 'name' => 'read parent',],
    ["guard_name"  => 'web' , 'name' => 'update parent',],
    ["guard_name"  => 'web' , 'name' => 'delete parent',],
    ["guard_name"  => 'web' , 'name' => 'create subject',],
    ["guard_name"  => 'web' , 'name' => 'read subject',],
    ["guard_name"  => 'web' , 'name' => 'update subject',],
    ["guard_name"  => 'web' , 'name' => 'delete subject',],
    ["guard_name"  => 'web' , 'name' => 'promote student',],
    ["guard_name"  => 'web' , 'name' => 'read promotion',],
    ["guard_name"  => 'web' , 'name' => 'reset promotion',],
    ["guard_name"  => 'web' , 'name' => 'graduate student',],
    ["guard_name"  => 'web' , 'name' => 'read graduations',],
    ["guard_name"  => 'web' , 'name' => 'reset graduation',],
    ["guard_name"  => 'web' , 'name' => 'create semester',],
    ["guard_name"  => 'web' , 'name' => 'read semester',],
    ["guard_name"  => 'web' , 'name' => 'update semester',],
    ["guard_name"  => 'web' , 'name' => 'delete semester',],
    ["guard_name"  => 'web' , 'name' => 'set semester',],
    ["guard_name"  => 'web' , 'name' => 'create syllabus',],
    ["guard_name"  => 'web' , 'name' => 'read syllabus',],
    ["guard_name"  => 'web' , 'name' => 'update syllabus',],
    ["guard_name"  => 'web' , 'name' => 'delete syllabus',],
    ["guard_name"  => 'web' , 'name' => 'create timetable',],
    ["guard_name"  => 'web' , 'name' => 'read timetable',],
    ["guard_name"  => 'web' , 'name' => 'update timetable',],
    ["guard_name"  => 'web' , 'name' => 'delete timetable',],
    ["guard_name"  => 'web' , 'name' => 'create custom timetable item',],
    ["guard_name"  => 'web' , 'name' => 'read custom timetable item',],
    ["guard_name"  => 'web' , 'name' => 'update custom timetable item',],
    ["guard_name"  => 'web' , 'name' => 'delete custom timetable item',],
    ["guard_name"  => 'web' , 'name' => 'create exam',],
    ["guard_name"  => 'web' , 'name' => 'read exam',],
    ["guard_name"  => 'web' , 'name' => 'update exam',],
    ["guard_name"  => 'web' , 'name' => 'delete exam',],
    ["guard_name"  => 'web' , 'name' => 'exam type',],
    ["guard_name"  => 'web' , 'name' => 'exam schea',],
    ["guard_name"  => 'web' , 'name' => 'exam admit card',],
    ["guard_name"  => 'web' , 'name' => 'exam desk slip',],
    ["guard_name"  => 'web' , 'name' => 'exam result sheet',],
    ["guard_name"  => 'web' , 'name' => 'exam marksheet',],
    ["guard_name"  => 'web' , 'name' => 'exam tc form',],
    ["guard_name"  => 'web' , 'name' => 'exam tc',],
    ["guard_name"  => 'web' , 'name' => 'exam character certificate',],
    ["guard_name"  => 'web' , 'name' => 'create grade system',],
    ["guard_name"  => 'web' , 'name' => 'read grade system',],
    ["guard_name"  => 'web' , 'name' => 'update grade system',],
    ["guard_name"  => 'web' , 'name' => 'delete grade system',],
    ["guard_name"  => 'web' , 'name' => 'create exam slot',],
    ["guard_name"  => 'web' , 'name' => 'read exam slot',],
    ["guard_name"  => 'web' , 'name' => 'update exam slot',],
    ["guard_name"  => 'web' , 'name' => 'delete exam slot',],
    ["guard_name"  => 'web' , 'name' => 'create exam record',],
    ["guard_name"  => 'web' , 'name' => 'read exam record',],
    ["guard_name"  => 'web' , 'name' => 'update exam record',],
    ["guard_name"  => 'web' , 'name' => 'delete exam record',],
    ["guard_name"  => 'web' , 'name' => 'check result',],
    ["guard_name"  => 'web' , 'name' => 'create notice',],
    ["guard_name"  => 'web' , 'name' => 'read notice',],
    ["guard_name"  => 'web' , 'name' => 'update notice',],
    ["guard_name"  => 'web' , 'name' => 'delete notice',],
    ["guard_name"  => 'web' , 'name' => 'read applicant',],
    ["guard_name"  => 'web' , 'name' => 'update applicant',],
    ["guard_name"  => 'web' , 'name' => 'delete applicant',],
    ["guard_name"  => 'web' , 'name' => 'change account application status',],
   
    
    ["guard_name"  => 'web' ,'name' => 'read admin',],
    ["guard_name"  => 'web' ,'name' => 'create admin',],
    ["guard_name"  => 'web' ,'name' => 'edit admin',],
    ["guard_name"  => 'web' ,'name' => 'delete admin',],
    ["guard_name"  => 'web' ,'name' => 'permission admin',],
    ["guard_name"  => 'web' ,'name' => 'read attendance',],
    ["guard_name"  => 'web' ,'name' => 'create attendance',],
    ["guard_name"  => 'web' ,'name' => 'edit attendance',],
    ["guard_name"  => 'web' ,'name' => 'delete attendance',],
    ["guard_name"  => 'web' ,'name' => 'read attendance register',],
    ["guard_name"  => 'web' ,'name' => 'create attendance register',],
    ["guard_name"  => 'web' ,'name' => 'edit attendance register',],
    ["guard_name"  => 'web' ,'name' => 'delete attendance register',],
    ["guard_name"  => 'web' ,'name' => 'read staff attendance',],
    ["guard_name"  => 'web' ,'name' => 'create staff attendance',],
    ["guard_name"  => 'web' ,'name' => 'edit staff attendance',],
    ["guard_name"  => 'web' ,'name' => 'delete staff attendance',],
    ["guard_name"  => 'web' ,'name' => 'read student attendance',],
    ["guard_name"  => 'web' ,'name' => 'create student attendance',],
    ["guard_name"  => 'web' ,'name' => 'edit student attendance',],
    ["guard_name"  => 'web' ,'name' => 'delete student attendance',],
    ["guard_name"  => 'web' ,'name' => 'read documents',],
    ["guard_name"  => 'web' ,'name' => 'create documents',],
    ["guard_name"  => 'web' ,'name' => 'edit documents',],
    ["guard_name"  => 'web' ,'name' => 'delete documents',],

    ["guard_name"  => 'web' ,'name' => 'read document-collage-logo',],
    ["guard_name"  => 'web' ,'name' => 'create document-collage-logo',],
    ["guard_name"  => 'web' ,'name' => 'edit document-collage-logo',],
    ["guard_name"  => 'web' ,'name' => 'delete document-collage-logo',],
    ["guard_name"  => 'web' ,'name' => 'read document-sign',],
    ["guard_name"  => 'web' ,'name' => 'create document-sign',],
    ["guard_name"  => 'web' ,'name' => 'edit document-sign',],
    ["guard_name"  => 'web' ,'name' => 'delete document-sign',],
    ["guard_name"  => 'web' ,'name' => 'read document-id-card',],
    ["guard_name"  => 'web' ,'name' => 'create document-id-card',],
    ["guard_name"  => 'web' ,'name' => 'edit document-id-card',],
    ["guard_name"  => 'web' ,'name' => 'delete document-id-card',],
    ["guard_name"  => 'web' ,'name' => 'read document-fees-card',],
    ["guard_name"  => 'web' ,'name' => 'create document-fees-card',],
    ["guard_name"  => 'web' ,'name' => 'edit document-fees-card',],
    ["guard_name"  => 'web' ,'name' => 'delete document-fees-card',],
    ["guard_name"  => 'web' ,'name' => 'read document-scheam',],
    ["guard_name"  => 'web' ,'name' => 'create document-scheam',],
    ["guard_name"  => 'web' ,'name' => 'edit document-scheam',],
    ["guard_name"  => 'web' ,'name' => 'delete document-scheam',],
    ["guard_name"  => 'web' ,'name' => 'read document-admit-card',],
    ["guard_name"  => 'web' ,'name' => 'create document-admit-card',],
    ["guard_name"  => 'web' ,'name' => 'edit document-admit-card',],
    ["guard_name"  => 'web' ,'name' => 'delete document-admit-card',],
    ["guard_name"  => 'web' ,'name' => 'read document-number-sheet',],
    ["guard_name"  => 'web' ,'name' => 'create document-number-sheet',],
    ["guard_name"  => 'web' ,'name' => 'edit document-number-sheet',],
    ["guard_name"  => 'web' ,'name' => 'delete document-number-sheet',],
    ["guard_name"  => 'web' ,'name' => 'read document-mark-sheet',],
    ["guard_name"  => 'web' ,'name' => 'create document-mark-sheet',],
    ["guard_name"  => 'web' ,'name' => 'edit document-mark-sheet',],
    ["guard_name"  => 'web' ,'name' => 'delete document-mark-sheet',],

    ["guard_name"  => 'web' ,'name' => 'read exam-exam-type',],
    ["guard_name"  => 'web' ,'name' => 'create exam-exam-type',],
    ["guard_name"  => 'web' ,'name' => 'edit exam-exam-type',],
    ["guard_name"  => 'web' ,'name' => 'delete exam-exam-type',],

    
    ["guard_name"  => 'web' ,'name' => 'read collage-documents',],
    ["guard_name"  => 'web' ,'name' => 'create collage-documents',],
    ["guard_name"  => 'web' ,'name' => 'edit collage-documents',],
    ["guard_name"  => 'web' ,'name' => 'delete collage-documents',],
    ["guard_name"  => 'web' ,'name' => 'read print-documents',],
    ["guard_name"  => 'web' ,'name' => 'create print-documents',],
    ["guard_name"  => 'web' ,'name' => 'edit print-documents',],
    ["guard_name"  => 'web' ,'name' => 'delete print-documents',],
    ["guard_name"  => 'web' ,'name' => 'read fees',],
    ["guard_name"  => 'web' ,'name' => 'create fees',],
    ["guard_name"  => 'web' ,'name' => 'edit fees',],
    ["guard_name"  => 'web' ,'name' => 'delete fees',],
    ["guard_name"  => 'web' ,'name' => 'read class-work',],
    ["guard_name"  => 'web' ,'name' => 'create class-work',],
    ["guard_name"  => 'web' ,'name' => 'edit class-work',],
    ["guard_name"  => 'web' ,'name' => 'delete class-work',],
    ["guard_name"  => 'web' ,'name' => 'read home-work',],
    ["guard_name"  => 'web' ,'name' => 'create home-work',],
    ["guard_name"  => 'web' ,'name' => 'edit home-work',],
    ["guard_name"  => 'web' ,'name' => 'delete home-work',],
    ["guard_name"  => 'web' ,'name' => 'read salary',],
    ["guard_name"  => 'web' ,'name' => 'create salary',],
    ["guard_name"  => 'web' ,'name' => 'edit salary',],
    ["guard_name"  => 'web' ,'name' => 'delete salary',],
    
    
    
    ["guard_name"  => 'web' ,'name' => 'read self-attendance',],
    ["guard_name"  => 'web' ,'name' => 'edit self-attendance',],
    ["guard_name"  => 'web' ,'name' => 'create self-attendance',],
    ["guard_name"  => 'web' ,'name' => 'delete self-attendance',],
    ["guard_name"  => 'web' ,'name' => 'read staff-attendance',],
    ["guard_name"  => 'web' ,'name' => 'edit staff-attendance',],
    ["guard_name"  => 'web' ,'name' => 'create staff-attendance',],
    ["guard_name"  => 'web' ,'name' => 'delete staff-attendance',],
    ["guard_name"  => 'web' ,'name' => 'read staff-attendance-register',],
    ["guard_name"  => 'web' ,'name' => 'edit staff-attendance-register',],
    ["guard_name"  => 'web' ,'name' => 'create staff-attendance-register',],
    ["guard_name"  => 'web' ,'name' => 'delete staff-attendance-register',],
    ["guard_name"  => 'web' ,'name' => 'read student-attendance',],
    ["guard_name"  => 'web' ,'name' => 'edit student-attendance',],
    ["guard_name"  => 'web' ,'name' => 'create student-attendance',],
    ["guard_name"  => 'web' ,'name' => 'delete student-attendance',],
    ["guard_name"  => 'web' ,'name' => 'read student-attendance-register',],
    ["guard_name"  => 'web' ,'name' => 'edit student-attendance-register',],
    ["guard_name"  => 'web' ,'name' => 'create student-attendance-register',],
    ["guard_name"  => 'web' ,'name' => 'delete student-attendance-register',],


    ["guard_name"  => 'web' ,'name' => 'read fees',],
    ["guard_name"  => 'web' ,'name' => 'edit fees',],
    ["guard_name"  => 'web' ,'name' => 'create fees',],
    ["guard_name"  => 'web' ,'name' => 'delete fees',],

    ["guard_name"  => 'web' ,'name' => 'read transport',],
    ["guard_name"  => 'web' ,'name' => 'edit transport',],
    ["guard_name"  => 'web' ,'name' => 'create transport',],
    ["guard_name"  => 'web' ,'name' => 'delete transport',],

    ["guard_name"  => 'web' ,'name' => 'read transport-fees',],
    ["guard_name"  => 'web' ,'name' => 'edit transport-fees',],
    ["guard_name"  => 'web' ,'name' => 'create transport-fees',],
    ["guard_name"  => 'web' ,'name' => 'delete transport-fees',],
    ["guard_name"  => 'web' ,'name' => 'read transport-assign-driver',],
    ["guard_name"  => 'web' ,'name' => 'edit transport-assign-driver',],
    ["guard_name"  => 'web' ,'name' => 'create transport-assign-driver',],
    ["guard_name"  => 'web' ,'name' => 'delete transport-assign-driver',],
    ["guard_name"  => 'web' ,'name' => 'read transport-student',],
    ["guard_name"  => 'web' ,'name' => 'edit transport-student',],
    ["guard_name"  => 'web' ,'name' => 'create transport-student',],
    ["guard_name"  => 'web' ,'name' => 'delete transport-student',],
   
    
    
    ["guard_name"  => 'web' ,'name' => 'read finance-incoming',],
    ["guard_name"  => 'web' ,'name' => 'edit finance-incoming',],
    ["guard_name"  => 'web' ,'name' => 'create finance-incoming',],
    ["guard_name"  => 'web' ,'name' => 'delete finance-incoming',],
    ["guard_name"  => 'web' ,'name' => 'read finance-expences',],
    ["guard_name"  => 'web' ,'name' => 'edit finance-expences',],
    ["guard_name"  => 'web' ,'name' => 'create finance-expences',],
    ["guard_name"  => 'web' ,'name' => 'delete finance-expences',],

    ["guard_name"  => 'web' ,'name' => 'read class-work',],
    ["guard_name"  => 'web' ,'name' => 'edit class-work',],
    ["guard_name"  => 'web' ,'name' => 'create class-work',],
    ["guard_name"  => 'web' ,'name' => 'delete class-work',],
    ["guard_name"  => 'web' ,'name' => 'read home-work',],
    ["guard_name"  => 'web' ,'name' => 'edit home-work',],
    ["guard_name"  => 'web' ,'name' => 'create home-work',],
    ["guard_name"  => 'web' ,'name' => 'delete home-work',],
    
    ["guard_name"  => 'web' ,'name' => 'read salary',],
    ["guard_name"  => 'web' ,'name' => 'edit salary',],
    ["guard_name"  => 'web' ,'name' => 'create salary',],
    ["guard_name"  => 'web' ,'name' => 'delete salary',],
    ["guard_name"  => 'web' ,'name' => 'read salary-distribute',],
    ["guard_name"  => 'web' ,'name' => 'edit salary-distribute',],
    ["guard_name"  => 'web' ,'name' => 'create salary-distribute',],
    ["guard_name"  => 'web' ,'name' => 'delete salary-distribute',],
    
    ["guard_name"  => 'web' ,'name' => 'read document',],
    ["guard_name"  => 'web' ,'name' => 'edit document',],
    ["guard_name"  => 'web' ,'name' => 'create document',],
    ["guard_name"  => 'web' ,'name' => 'delete document',],
    ["guard_name"  => 'web' ,'name' => 'create all-profile',],

    
            
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
           
          
           

         ]) ;  

 // assign permission to sub-super-admin
 $sub_super_admin = Role::where('name', 'sub-super-admin')->first();
 $sub_super_admin->givePermissionTo([

   
    
    
 ]) ; 

 // assign permission to Manager
 $manager = Role::where('name', 'manager')->first();
 $manager->givePermissionTo([
    'menu-staff',
    'menu-teacher',
    'menu-student',
    'menu-class',
    'menu-attendance',
    'menu-documents',
    'menu-fees',
    'menu-timetable',
    'menu-transport',
    'menu-finance',
    'menu-class-work',
    'menu-home-work',
    'menu-salary',
    'menu-library',
    'menu-software-plan',
    'menu-payment-plan',

    'create all-profile',
    'read self-attendance',
    'read teacher',
    'read student',
    'read class',
    'create section',
    'read staff-attendance',
    'read staff-attendance-register',
    'read student-attendance',
    'read student-attendance-register',
    'read fees',
    'create fees',
    'read timetable',
    'read transport',
    'create transport',
    'read transport-fees',
    'create transport-fees',
    'create transport-assign-driver',
    'read transport-student',
    'read finance-incoming',
    'read finance-expences',
    'read class-work',
    'create class-work',
    'read home-work',
    'create home-work',
    'read salary',
    'read salary-distribute',
    'read document-collage-logo',
    'read document-sign',
    'read document-id-card',
    'read document-fees-card',
    'read document-scheam',
    'read document-admit-card',
    'read document-number-sheet',
    'read document-mark-sheet',
    'read exam-exam-type',
    'create staff-admin',
    'read staff-admin',
    'update staff-admin',
    'delete staff-admin',
    'create staff-manager',
    'read staff-manager',
    'update staff-manager',
    'delete staff-manager',
    'create staff-principle',
    'read staff-principle',
    'update staff-principle',
    'delete staff-principle',
    'create staff-incharge',
    'read staff-incharge',
    'update staff-incharge',
    'delete staff-incharge',
    'create staff-class-teacher',
    'read staff-class-teacher',
    'update staff-class-teacher',
    'delete staff-class-teacher',
    'create staff-teacher',
    'read staff-teacher',
    'update staff-teacher',
    'delete staff-teacher',
    'create library',
    'read library',
    'update library',
    'delete library',
   
   

 
    
    
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
            'read graduations',
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
//             'name' => 'read graduations',
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
