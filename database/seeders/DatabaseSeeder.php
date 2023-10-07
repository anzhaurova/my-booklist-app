<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Booklist;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Booklist::factory(6)->create();
        Book::factory(6)->create();

        // Booklist::create([
        //     'title' => '100 лучших книг всех времен и народов',
        //     'description' => 'Американский журнал «Newsweek» опубликовал рейтинг «100 лучших книг всех времен и народов».
        //         Не бог весть какая новость — подобным списком, составленным в то или иное время, могут похвастаться едва ли
        //         не все крупные издания этой страны. Не оттого, что американцы такие уж завзятые книгочеи, просто они 
        //         обожают всякого рода рейтинги и чарты. Рейтинг «Newsweek» на этот раз анонсирован как «рейтинг рейтингов».
        //         То есть авторы проанализировали подобные «топы» других популярных изданий Америки и сделали свой — сводный. 
        //         Еще одна особенность этого исследования: редакция пригласила своих читателей к активной работе над ним. 
        //         Каждый может внести свою лепту в создание драгоценного списка.
        //     ',
        // ]);

        // Booklist::create([
        //     'title' => 'Список Бродского',
        //     'description' => 'Знаменитый поэт последние 24 года своей жизни преподавал литературу в различных американских университетах. 
        //     Бродский был так огорчен тем, что студенты так мало читают, что специально составил «список книг, которые должен прочесть каждый»,
        //         чтобы «поддерживать базовую беседу». В его список вошли как литературные памятники, так и произведения современной литературы, 
        //         и их намного больше ста. Но мы решили разделить список по авторам. В любом случае, эти книги помогут понять лучше творчество 
        //         русского поэта и повысить культурный уровень. В общем, если хотите соответствовать представлениям Бродского об интересном с
        //         обеседнике, вот вам книги для самообразования.',
        // ]);
    }
}  
