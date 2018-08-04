<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertDefaultData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();

        // course category
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (1, \'日文\', 1, 0, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (2, \'英文\', 1, 0, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (3, \'JLPT\', 2, 1, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (4, \'日文會話\', 2, 1, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (5, \'TOEIC\', 2, 2, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (6, \'TOEFL iBT\', 2, 2, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (7, \'N1\', 3, 3, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (8, \'N2\', 3, 3, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (9, \'N3\', 3, 3, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (10, \'N4\', 3, 3, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (11, \'N5\', 3, 3, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (12, \'商用\', 3, 4, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (13, \'旅遊\', 3, 4, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (14, \'基礎\', 3, 4, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (15, \'600分班\', 3, 5, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (16, \'800分班\', 3, 5, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (17, \'60分班\', 3, 6, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (18, \'80分班\', 3, 6, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (19, \'100分班\', 3, 6, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (20, \'聽力\', 2, 1, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (21, \'基礎\', 3, 20, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (22, \'進階\', 3, 20, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (23, \'進階\', 3, 4, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (24, \'閱讀\', 2, 1, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (25, \'寫作\', 2, 1, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (26, \'綜合\', 2, 1, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (27, \'基礎\', 3, 24, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (28, \'進階\', 3, 24, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (29, \'基礎\', 3, 25, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (30, \'進階\', 3, 25, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (31, \'入門\', 3, 26, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (32, \'初級\', 3, 26, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (33, \'中級\', 3, 26, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (34, \'進階\', 3, 26, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (36, \'聽力\', 2, 2, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (37, \'會話\', 2, 2, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (38, \'閱讀\', 2, 2, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (39, \'寫作\', 2, 2, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (40, \'綜合\', 2, 2, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (42, \'基礎\', 3, 36, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (43, \'進階\', 3, 36, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (44, \'商用\', 3, 37, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (45, \'旅遊\', 3, 37, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (46, \'基礎\', 3, 37, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (47, \'進階\', 3, 37, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (48, \'基礎\', 3, 38, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (49, \'進階\', 3, 38, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (50, \'基礎\', 3, 39, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (51, \'進階\', 3, 39, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (52, \'入門\', 3, 40, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (53, \'初級\', 3, 40, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (54, \'中級\', 3, 40, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (55, \'進階\', 3, 40, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (56, \'全民英檢GEPT\', 2, 2, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (57, \'初級\', 3, 56, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (58, \'中級\', 3, 56, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (59, \'中高級\', 3, 56, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (60, \'高級\', 3, 56, 0, now(), now());');
        DB::statement('INSERT INTO course_category (id, name, level, parent_id, display_order, created_at, updated_at) VALUES (61, \'優級\', 3, 56, 0, now(), now());');

        // role
        DB::statement('INSERT INTO role (id, name, permission_ids, created_at, updated_at) VALUES (1, \'full teacher\', \'\', now(), now());');

        // currency
        DB::statement('INSERT INTO currency (id, name, symbol, created_at, updated_at) VALUES (1, \'NTD\',\'$\', now(), now());');
        DB::statement('INSERT INTO currency (id, name, symbol, created_at, updated_at) VALUES (2, \'JPY\',\'¥\', now(), now());');
        DB::statement('INSERT INTO currency (id, name, symbol, created_at, updated_at) VALUES (3, \'USD\',\'$\', now(), now());');
        DB::statement('INSERT INTO currency (id, name, symbol, created_at, updated_at) VALUES (4, \'RMB\',\'¥\', now(), now());');

        // bulletin type
        DB::statement('INSERT INTO course_bulletin_type (id, name, priority, created_at, updated_at) VALUES (1, \'emergency\', 1, now(), now());');
        DB::statement('INSERT INTO course_bulletin_type (id, name, priority, created_at, updated_at) VALUES (2, \'common\', 2, now(), now());');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('course_category')->delete();
        DB::statement('ALTER TABLE course_category AUTO_INCREMENT = 1');

        DB::table('role')->delete();
        DB::statement('ALTER TABLE role AUTO_INCREMENT = 1');

        DB::table('currency')->delete();
        DB::statement('ALTER TABLE currency AUTO_INCREMENT = 1');

        DB::table('course_bulletin_type')->delete();
        DB::statement('ALTER TABLE course_bulletin_type AUTO_INCREMENT = 1');
    }
}
