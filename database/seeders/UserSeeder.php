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
            'previous_school'    => "Test School"
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
            'previous_school'    => "Test School"
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
            'previous_school'    => "Test School"
        ]);

        $subsuper->assignRole('sub-super-admin');
        $subsuper->save();


        $manager = User::firstOrCreate([
            'id'                => 4,
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
            'previous_school'    => "Test School"
        ]);

        $manager->assignRole('manager');
        $manager->save();



        $admin = User::firstOrCreate([
            'id'                => 5,
            'name'              => 'admin',
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
            'previous_school'    => "Test School"
        ]);

        $admin->assignRole('admin');

        $teacher = User::create([
            'id'                => 6,
            'name'              => 'teacher',
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
            'previous_school'    => "Test School"
        ]);

        $teacher->assignRole('teacher');

        $teacher->teacherRecord()->create([
            'user_id' => $teacher->id,
        ]);

        $student = User::create([
            'id'                => 7,
            'name'              => 'student',
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
            'previous_school'    => "Test School"
        ]);
        $student->studentRecord()->create([
            'my_class_id'      => 1,
            'section_id'       => 1,
            'admission_date'   => '22/04/04',
            'is_graduated'     => false,
            'admission_number' => Str::random(10),
        ]);

        $student->assignRole('student');

        $parent = User::create([
            'id'                => 8,
            'name'              => 'parent',
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
            'previous_school'    => "Test School"
        ]);

        $parent->assignRole('parent');

        $parent->parentRecord()->create();

        $accountant = User::create([
            'id'                => 9,
            'name'              => 'accountant',
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
            'previous_school'    => "Test School"
        ]);

        $accountant->assignRole('accountant');

        $librarian = User::create([
            'id'                => 10,
            'name'              => 'libratian',
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
            'previous_school'    => "Test School"
        ]);

        $librarian->assignRole('librarian');
    }
}
