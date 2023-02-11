<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $superAdmin = User::firstOrCreate([
            'id'                => 1,
            'role_type'         =>'super-admin',
            'name'              => 'super admin',
            'email'             => 'super@admin.com',
            'password'          => Hash::make('Qwerty@123'),
            'school_id'         => 1,
            'address'           => 'super admin street',
            'birthday'          => '22/04/04',
            'nationality'       => 'india',
            'state'             => 'punjab',
            'city'              => 'moga',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'aadhaar_number'    => '567654432',
            'caste'             => 'GENERAL',
            'fname'             => 'Test Father',
            'mname'             => 'Test Mother',
            'f_occupation'      => 'FARMER',
            'm_occupation'      => 'FARMER',
            'previous_school'   => "Test School",
            'sub_caste'         => 'General',
            'status'            => 'ACTIVE',
            'phone'             => '7300000000' 
        ]);

        $superAdmin->assignRole('super-admin');
        $superAdmin->save();


        $localsuperAdmin = User::firstOrCreate([
            'id'                => 2,
            'name'              => 'local super admin',
            'email'             => 'localsuper@admin.com',
            'password'          => Hash::make('Qwerty@123'),
            'school_id'         => 1,
            'address'           => 'super admin street',
            'birthday'          => '22/04/04',
            'nationality'       => 'india',
            'state'             => 'punjab',
            'city'              => 'moga',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'aadhaar_number'    => '567654432',
            'caste'             => 'GENERAL',
            'fname'             => 'Test Father',
            'mname'             => 'Test Mother',
            'f_occupation'      => 'FARMER',
            'm_occupation'      => 'FARMER',
            'previous_school'    => "Test School",
            'sub_caste'         => 'General',
            'status'            => 'ACTIVE',
            'phone'             => '7300000000', 
            'role_type'         =>'local-super-admin',
        ]);

        $localsuperAdmin->assignRole('local-super-admin');
        $localsuperAdmin->save();


        $subsuper = User::firstOrCreate([
            'id'                => 3,
            'name'              => 'sub super admin',
            'email'             => 'subsuper@admin.com',
            'password'          => Hash::make('Qwerty@123'),
            'school_id'         => 1,
            'address'           => 'Sub super admin street',
            'birthday'          => '22/04/04',
            'nationality'       => 'india',
            'state'             => 'punjab',
            'city'              => 'moga',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'aadhaar_number'    => '567654432',
            'caste'             => 'GENERAL',
            'fname'             => 'Test Father',
            'mname'             => 'Test Mother',
            'f_occupation'      => 'FARMER',
            'm_occupation'      => 'FARMER',
            'previous_school'    => "Test School",
            'sub_caste'         => 'General',
            'status'            => 'ACTIVE',
            'phone'             => '7300000000' ,
            'role_type'         =>'sub-super-admin',
        ]);

        $subsuper->assignRole('sub-super-admin');
        $subsuper->save();

        $admin = User::firstOrCreate([
            'id'                => 4,
            'name'              => 'admin principal',
            'email'             => 'admin@admin.com',
            'password'          => Hash::make('Qwerty@123'),
            'school_id'         => 1,
            'address'           => 'admin street',
            'birthday'          => '22/04/04',
            'nationality'       => 'india',
            'state'             => 'punjab',
            'city'              => 'moga',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'aadhaar_number'    => '567654432',
            'caste'             => 'GENERAL',
            'fname'             => 'Test Father',
            'mname'             => 'Test Mother',
            'f_occupation'      => 'FARMER',
            'm_occupation'      => 'FARMER',
            'previous_school'    => "Test School",
            'sub_caste'         => 'General',
            'status'            => 'ACTIVE',
            'phone'             => '7300000000' ,
            'role_type'         =>'admin',
        ]);

        $admin->assignRole('admin');

        $manager = User::firstOrCreate([
            'id'                => 5,
            'name'              => 'manager',
            'email'             => 'manager@admin.com',
            'password'          => Hash::make('Qwerty@123'),
            'school_id'         => 1,
            'address'           => 'Sub super admin street',
            'birthday'          => '22/04/04',
            'nationality'       => 'india',
            'state'             => 'punjab',
            'city'              => 'moga',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'aadhaar_number'    => '567654432',
            'caste'             => 'GENERAL',
            'fname'             => 'Test Father',
            'mname'             => 'Test Mother',
            'f_occupation'      => 'FARMER',
            'm_occupation'      => 'FARMER',
            'previous_school'    => "Test School",
            'sub_caste'         => 'General',
            'status'            => 'ACTIVE',
            'phone'             => '7300000000' ,
            'role_type'         =>'manager',
        ]);

        $manager->assignRole('manager');
        $manager->save();


        $principle = User::firstOrCreate([
            'id'                => 6,
            'name'              => 'principle principal',
            'email'             => 'principle@principle.com',
            'password'          => Hash::make('Qwerty@123'),
            'school_id'         => 1,
            'address'           => 'principle street',
            'birthday'          => '22/04/04',
            'nationality'       => 'india',
            'state'             => 'punjab',
            'city'              => 'moga',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'aadhaar_number'    => '567654432',
            'caste'             => 'GENERAL',
            'fname'             => 'Test Father',
            'mname'             => 'Test Mother',
            'f_occupation'      => 'FARMER',
            'm_occupation'      => 'FARMER',
            'previous_school'    => "Test School",
            'sub_caste'         => 'General',
            'status'            => 'ACTIVE',
            'phone'             => '7300000000'  ,
            'role_type'         => 'principle',

        ]);

        $principle->assignRole('principle');
        $principle->save();

        $office_incharge = User::firstOrCreate([
            'id'                => 7,
            'name'              => 'office incharge',
            'email'             => 'office@incharge.com',
            'password'          => Hash::make('Qwerty@123'),
            'school_id'         => 1,
            'address'           => 'principle street',
            'birthday'          => '22/04/04',
            'nationality'       => 'india',
            'state'             => 'punjab',
            'city'              => 'moga',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'aadhaar_number'    => '567654432',
            'caste'             => 'GENERAL',
            'fname'             => 'Test Father',
            'mname'             => 'Test Mother',
            'f_occupation'      => 'FARMER',
            'm_occupation'      => 'FARMER',
            'previous_school'    => "Test School",
            'sub_caste'         => 'General',
            'status'            => 'ACTIVE',
            'phone'             => '7300000000' ,
            'role_type'         => 'incharge', 
        ]);

        $office_incharge->assignRole('incharge');
        $office_incharge->save();

        $class_teacher = User::create([
            'id'                => 8,
            'name'              => 'class teacher',
            'email'             => 'class_teacher@teacher.com',
            'password'          => Hash::make('Qwerty@123'),
            'school_id'         => 1,
            'address'           => 'teacher street',
            'birthday'          => '22/04/04',
            'nationality'       => 'india',
            'state'             => 'punjab',
            'city'              => 'moga',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'aadhaar_number'    => '567654432',
            'caste'             => 'GENERAL',
            'fname'             => 'Test Father',
            'mname'             => 'Test Mother',
            'f_occupation'      => 'FARMER',
            'm_occupation'      => 'FARMER',
            'previous_school'    => "Test School",
            'sub_caste'         => 'General',
            'status'            => 'ACTIVE',
            'phone'             => '7300000000',
            'role_type'         => 'classteacher', 
        ]);

        $class_teacher->assignRole('classteacher');

        $class_teacher->teacherRecord()->create([
            'user_id' => $class_teacher->id,
            'type'    =>"class_teacher",
        ]);



        $teacher = User::create([
            'id'                => 9,
            'name'              => 'school teacher',
            'email'             => 'teacher@teacher.com',
            'password'          => Hash::make('Qwerty@123'),
            'school_id'         => 1,
            'address'           => 'teacher street',
            'birthday'          => '22/04/04',
            'nationality'       => 'india',
            'state'             => 'punjab',
            'city'              => 'moga',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'aadhaar_number'    => '567654432',
            'caste'             => 'GENERAL',
            'fname'             => 'Test Father',
            'mname'             => 'Test Mother',
            'f_occupation'      => 'FARMER',
            'm_occupation'      => 'FARMER',
            'previous_school'    => "Test School",
            'sub_caste'         => 'General',
            'status'            => 'ACTIVE',
            'phone'             => '7300000000' ,
            'role_type'         => 'teacher',
        ]);

        $teacher->assignRole('teacher');

        $teacher->teacherRecord()->create([
            'user_id' => $teacher->id,
            'type'    =>"teacher",
        ]);

        $student = User::create([
            'id'                => 10,
            'name'              => 'class student',
            'email'             => 'student@student.com',
            'password'          => Hash::make('Qwerty@123'),
            'school_id'         => 1,
            'address'           => 'student street',
            'birthday'          => '22/04/04',
            'nationality'       => 'india',
            'state'             => 'punjab',
            'city'              => 'moga',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'aadhaar_number'    => '567654432',
            'caste'             => 'GENERAL',
            'fname'             => 'Test Father',
            'mname'             => 'Test Mother',
            'f_occupation'      => 'FARMER',
            'm_occupation'      => 'FARMER',
            'previous_school'    => "Test School",
            'sub_caste'         => 'General',
            'status'            => 'ACTIVE',
            'phone'             => '7300000000' ,
            'role_type'         => 'student',
        ]);
        $student->studentRecord()->create([
            'my_class_id'      => 1,
            'section_id'       => 1,
            'admission_date'   => '22/04/04',
            'is_graduated'     => false,
            'admission_number' => Str::random(10),
            'sr_no'            => Str::random(10),
            'roll_no'          => Str::random(10),
        ]); 

        $student->assignRole('student');

        $parent = User::create([
            'id'                => 11,
            'name'              => 'student parent',
            'email'             => 'parent@parent.com',
            'password'          => Hash::make('Qwerty@123'),
            'school_id'         => 1,
            'address'           => 'parent street',
            'birthday'          => '22/04/04',
            'nationality'       => 'india',
            'state'             => 'punjab',
            'city'              => 'moga',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'aadhaar_number'    => '567654432',
            'caste'             => 'GENERAL',
            'fname'             => 'Test Father',
            'mname'             => 'Test Mother',
            'f_occupation'      => 'FARMER',
            'm_occupation'      => 'FARMER',
            'previous_school'    => "Test School",
            'sub_caste'         => 'General',
            'status'            => 'ACTIVE',
            'phone'             => '7300000000' ,
            'role_type'         => 'parent',
        ]);

        $parent->assignRole('parent');

        $parent->parentRecord()->create();

        $accountant = User::create([
            'id'                => 12,
            'name'              => 'collage accountant',
            'email'             => 'accountant@accountant.com',
            'password'          => Hash::make('Qwerty@123'),
            'school_id'         => 1,
            'address'           => 'accountant street',
            'birthday'          => '22/04/04',
            'nationality'       => 'india',
            'state'             => 'punjab',
            'city'              => 'moga',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'aadhaar_number'    => '567654432',
            'caste'             => 'GENERAL',
            'fname'             => 'Test Father',
            'mname'             => 'Test Mother',
            'f_occupation'      => 'FARMER',
            'm_occupation'      => 'FARMER',
            'previous_school'    => "Test School",
            'sub_caste'         => 'General',
            'status'            => 'ACTIVE',
            'phone'             => '7300000000' ,
            'role_type'         => 'accountant',

        ]);

        $accountant->assignRole('accountant');

        $librarian = User::create([
            'id'                => 13,
            'name'              => 'collage libratian',
            'email'             => 'libratian@librarian.com',
            'password'          => Hash::make('Qwerty@123'),
            'school_id'         => 1,
            'address'           => 'librarian street',
            'birthday'          => '22/04/04',
            'nationality'       => 'india',
            'state'             => 'punjab',
            'city'              => 'moga',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'aadhaar_number'    => '567654432',
            'caste'             => 'GENERAL',
            'fname'             => 'Test Father',
            'mname'             => 'Test Mother',
            'f_occupation'      => 'FARMER',
            'm_occupation'      => 'FARMER',
            'previous_school'    => "Test School",
            'sub_caste'         => 'General',
            'status'            => 'ACTIVE',
            'phone'             => '7300000000' ,
            'role_type'         => 'librarian',

        ]);

        $librarian->assignRole('librarian');
    }
}
