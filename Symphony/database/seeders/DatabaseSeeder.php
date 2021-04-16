<?php

namespace Database\Seeders;

use Exception;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

require_once 'vendor/autoload.php';

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
//        $min = strtotime('1980-01-01');
//        $max = strtotime('1999-31-31');
        $numberPrefixes = ['0812', '0813', '0814', '0815', '0816', '0817', '0818', '0819', '0909', '0908'];
        $faker = Factory::create('vi_VN');

        DB::table('counselors')->insert([
//            [
//                'fname' => $faker->firstName(),
//                'lname' => $faker->lastName(),
//                'email' => $faker->email(),
//                'password' => Hash::make('password'),
//                'dob' => date('Y-m-d', rand($min, $max)),
//                'phone' => $numberPrefixes[array_rand($numberPrefixes)] . $this->randomNumberSequence()
//            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ]
        ]);

        DB::table('classes')->insert([
            [
                'year' => 2019,
                'name' => 'T2019M',
                'description' => 'Lop Hoc Co Thi',
                'teacher_id' => 1,
                'courses_id' => 1
            ],
            [
                'year' => 2020,
                'name' => 'T2020N',
                'description' => 'Lop Hoc Co Thi Ver2',
                'teacher_id' => 1,
                'courses_id' => 2
            ],
            [
                'year' => 2020,
                'name' => 'T2020N',
                'description' => 'Lop Hoc Co Ha',
                'teacher_id' => 2,
                'courses_id' => 1
            ],
            [
                'year' => 2019,
                'name' => 'T2019A',
                'description' => 'Lop Hoc Co Thi Ver3',
                'teacher_id' => 1,
                'courses_id' => 3
            ],
            [
                'year' => 2020,
                'name' => 'T2020M',
                'description' => 'Lop Hoc Co Thi Ver2',
                'teacher_id' => 1,
                'courses_id' => 2
            ]
        ]);

        DB::table('courses')->insert([
            [
               'syllabus' => 'ADCP',
               'description' => 'An Di Ci Pee'
            ],
            [
                'syllabus' => 'AILE',
                'description' => 'An In Lieu Eiu'
            ],
            [
                'syllabus' => 'BMEI',
                'description' => 'Bi Mu En Ieu'
            ],
            [
                'syllabus' => 'KMIJ',
                'description' => 'Khong Mua Ieu Jieu'
            ],
            [
                'syllabus' => 'KEUJ',
                'description' => 'Keu Eun Uoi Jeu'
            ]
        ]);

        DB::table('exams')->insert([
            [
                'exam_id' => 1,
                'student_id' => 1,
                'start_date' => '2021-01-10',
                'mark' => 8
            ],
            [
                'exam_id' => 1,
                'student_id' => 2,
                'start_date' => '2021-01-10',
                'mark' => 9
            ],
            [
                'exam_id' => 1,
                'student_id' => 3,
                'start_date' => '2021-01-10',
                'mark' => 6
            ],
            [
                'exam_id' => 1,
                'student_id' => 4,
                'start_date' => '2021-01-10',
                'mark' => 10
            ],
            [
                'exam_id' => 2,
                'student_id' => 1,
                'start_date' => '2021-03-20',
                'mark' => 7
            ],
            [
                'exam_id' => 2,
                'student_id' => 2,
                'start_date' => '2021-03-20',
                'mark' => 9
            ],
            [
                'exam_id' => 2,
                'student_id' => 3,
                'start_date' => '2021-03-20',
                'mark' => 10
            ]
        ]);

        DB::table('exam_types')->insert([
            [
                'description' => 'Bai kiem tra dau vao'
            ],
            [
                'description' => 'Bai kiem tra cuoi ki'
            ]
        ]);

        DB::table('students')->insert([
            [
                'classes_id' => 1,
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 1,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'classes_id' => 1,
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 1,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'classes_id' => 1,
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 2,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'classes_id' => 2,
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 2,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'classes_id' => 3,
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 1,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'classes_id' => 3,
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 3,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],
        ]);

        DB::table('teachers')->insert([
            [
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => 'Dang Kim',
                'lname' => 'Thi',
                'dob' => $faker->dateTimeBetween('-50 years', '-30 years'),
                'phone' => $faker->phoneNumber(),
                'last_login_date' => $faker->dateTimeBetween('-1 years', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => 'Le Thi',
                'lname' => 'Ha',
                'dob' => $faker->dateTimeBetween('-50 years', '-30 years'),
                'phone' => $faker->phoneNumber(),
                'last_login_date' => $faker->dateTimeBetween('-1 years', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => 'Vuong Van',
                'lname' => 'Vu',
                'dob' => $faker->dateTimeBetween('-50 years', '-30 years'),
                'phone' => $faker->phoneNumber(),
                'last_login_date' => $faker->dateTimeBetween('-1 years', now()),
                'last_login_ip' => $faker->ipv4
            ],
        ]);

        DB::table('visitors')->insert([
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'e_mark' => rand(0, 10),
                'visitor_statuses_id' => 1
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'e_mark' => rand(0, 10),
                'visitor_statuses_id' => 2
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'e_mark' => rand(0, 10),
                'visitor_statuses_id' => 2
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'e_mark' => rand(0, 10),
                'visitor_statuses_id' => 1
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'e_mark' => rand(0, 10),
                'visitor_statuses_id' => 3
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'e_mark' => rand(0, 10),
                'visitor_statuses_id' => 1
            ],
        ]);

        DB::table('visitor_statuses')->insert([
            [
                'description' => 'Đã đăng ký học'
            ],
            [
                'description' => 'Đang đăng ký học'
            ],
            [
                'description' => 'Đã hủy đăng ký học'
            ]
        ]);
    }

    public function randomNumberSequence($requiredLength = 6, $highestDigit = 9): string
    {
        $sequence = '';
        for ($i = 0; $i < $requiredLength; ++$i) {
            $sequence .= mt_rand(0, $highestDigit);
        }
        return $sequence;
    }
}
