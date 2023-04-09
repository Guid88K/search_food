<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class FoodRecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_recipes')->insert([
            'image' => 'баклажани',
            'description' => '500',
            'recipe_id' => 'гр.',
        ]);
    }

//1.jpg||Баклажани помити, нарізати кружельцями товщиною 0,4-0,5 см.	1
//2.jpg||	Яйця розбити в миску, добре посолити, поперчити і розмішати вінчиком.	1
//3.jpg||	Додати 1 ст. л. борошна і добре збити вінчиком.	1
//4.jpg||	Баклажани обмакати в яйці і смажити на сковорідці до золотистого кольору.	1
//5.jpg||	Тим часом помідори ошпарити окропом, очистити від шкірки і нарізати кружельцями.	1
//6.jpg||	Сир нарізати плюстерками.	1
//7.jpg||	Шар 1. Спершу викласти обсмажені баклажани.	1
//8.jpg||	Шар 1. На баклажан викласти помідор. Посолити.	1
//9.jpg||	Шар 1. Помідор накрити сиром.	1
//10.jpg||	Шар 2. Спершу викласти обсмажені баклажани.	1
//11.jpg||	Шар 2. На баклажан викласти помідор. Посолити.	1
//12.jpg||	Шар 2. Помідор накрити сиром.	1
//13.jpg||	Шар 3. Спершу викласти обсмажені баклажани.	1
//14.jpg||	Шар 3. На баклажан викласти помідор. Посолити.	1
//15.jpg||	Шар 3. Помідор накрити сиром.	1
//16.jpg||	Деко злегка змастити рослинною олією і викласти перекладені баклажани. Випікати в духовці при 180 °C поки не розплавиться сир (приблизно 20-30 хв).	1
//step_file_6448bf2e056ab	Закваску вийняти з холодильника і залишити на 30 хв. при кімнатній температурі, щоб вона прогрілась. Потім 4 повні ст. л. закваски викласти в окрему посудину.	2
//step_file_6448bf2e066e9	Додати сіль, цукор і теплу (37–38 °С) воду. Ретельно перемішати.	2
//step_file_6448bf2e06fd8	До закваски додати олію, перемішати.	2
//step_file_6448bf2e077d8	У велику миску просіяти пшеничне борошно, додати житнє борошно і перемішати.	2
//step_file_6448bf2e08021	До борошна потрохи влити закваску, розведену з водою, або навпаки, – борошно частинами додати до закваски, все перемішуючи ложкою, …	2
//step_file_6448bf2e087b7	…а потім руками замісити м’яке еластичне тісто, яке трохи липне до рук. Прикрити його рушничком і залишити на 40–60 хв. в теплому місці.	2
//step_file_6448bf2e08ee8	Потім тісто ще раз трошки вимісити і сформувати з нього “ковбаску” (якщо тісто буде дуже липнути до рук, – притрусіть його борошном) і викласти у форму, змащену олією і присипану борошном. Хліб змастити олією, прикрити рушничком чи харчовою плівкою і залишити в теплому місці на 4–6 (залежно від температури в приміщенні) год. або залишити наніч, щоб тісто збільшилось в об’ємі майже втричі.
//Можна пришвидчити процес підростання: на верхній ярус духовки (її вмикати не потрібно) з одного боку покласти форму з хлібом, прикриту рушничком / харчовою плівкою, а внизу, з іншого боку покласти каструльку з гарячою водою. Важливо,щоб каструля з гарячою водою не стояла під формою і не нагрівала її безпосередньо.	2
//step_file_6448bf2e096aa	Хліб, що підріс, помістити у розігріту до 200 °С духовку на 20 хв., потім температуру зменшити до 180 °С і випікати ще приблизно 25 хв. За бажанням, під час випікання хліба на дно духовки можна покласти посудину (сковорідку, каструльку, тощо) з водою. Тоді готовий хліб буде мати грубшу скоринку.	2
//step_file_6448bf2e0a04b	Спечений хліб викласти на решітку, накрити рушничком і вистудити. Бездріжджовий хліб на заквасці з житнього борошна готовий.
//

}
