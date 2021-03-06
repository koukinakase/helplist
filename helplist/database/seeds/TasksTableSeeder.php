<?php

use App\Models\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataSet = [
            [
                'user_id' => 1,
                'deadline' => '2021-03-25',
                'number' => 2,
                'title' => 'test1',
                'body' => '初依頼',
            ],
            [
                'user_id' => 1,
                'deadline' => '2021-03-26',
                'number' => 3,
                'title' => 'test2',
                'body' => '自動データ',
            ],
            [
                'user_id' => 2,
                'deadline' => '2021-03-27',
                'number' => 1,
                'title' => 'test3',
                'body' => 'ID: 2 のユーザーの投稿です',
            ],
        ];

        foreach ($dataSet as $data) {
            Task::create($data);
        }
    }
}
