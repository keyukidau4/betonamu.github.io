<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'VN:Bún bò Huế
                        JP:牛ラーメン',
            'description' => '「Bun＝米麺ブン、Bo＝牛、Hue＝フエ風」。 フエ風牛汁麺「ブンボーフエ/Bun Bo Hue」は、中部フエ地方を代表するブンの汁麺料理です。',
            'photo' => 'image/2.jpg',
            'price' => 980
        ]);

        DB::table('products')->insert([
            'name' => 'VN:Chả lụa
                        JP:ベトナムのハム',
            'description' => 'チャールア （chả lụa ）はベトナム風のハムのことで、バインミーの具の定番！ 他にバインクオン（bánh cuốn、蒸し春巻き）と一緒に食べたりします。',
            'photo' => 'image/1.jpg',
            'price' => 870
        ]);

        DB::table('products')->insert([
            'name' => 'VN：Bánh xèo
                        JP：バインセオ',
            'description' => '日本でベトナム風お好み焼き、西欧でベトナム風クレープなどと呼ばれるベトナム南部の粉物料理。',
            'photo' => 'image/5.jpg',
            'price' => 900
        ]);

        DB::table('products')->insert([
            'name' => 'VN：Goi cuon
                        JP：春巻き',
            'description' => 'ライスペーパーで海老やサニーレタス、きゅうりなどを巻くのが一般的です。 お好みで大葉やネギ、ニラなどを加えて味を変えながら食べるのもオススメです。',
            'photo' => 'image/3.jpg',
            'price' => 800
        ]);

        DB::table('products')->insert([
            'name' => 'VN:Pho Bo
                        JP:牛肉フォー',
            'description' => 'スープに平たい米粉麺に肉や野菜などを加えたベトナムの麺料理です。スープは鶏や牛から出汁を取ったものが多く、どちらにしてもあっさりとした味で万人から好まれるような料理です.',
            'photo' => 'image/4.jpg',
            'price' => 980
        ]);

        DB::table('products')->insert([
            'name' => 'VN:バインミー
                        JP:ベトナムサンドイッチ',
            'description' => 'パンにレバーペーストを塗って、チャーシューやパテ、ダイコンやニンジン（甘酢漬けのなます）、レタス、きゅうりなどの野菜、そしてパクチー、ミントなんかを挟んで大きな口を開けて、そのまんまがぶり！と、いきます。',
            'photo' => 'image/6.jpg',
            'price' => 650
        ]);

        DB::table('products')->insert([
            'name' => 'VN:Bún Ốc
                        JP:ブンオック',
            'description' => 'タニシ麺です。フォー以外のベトナム麺料理、カタツムリの麺を食べると、カタツムリの肉のコクと歯ごたえがスープの甘みと混ざり合い、生野菜と一緒に食べると、より美味しくなります。',
            'photo' => 'image/bun-oc-7.jpg',
            'price' => 850
        ]);

        DB::table('products')->insert([
            'name' => 'VN:Nộm Gà
                        JP:チキンサラダ',
            'description' => '蓮の根チキンサラダはサクサクとサクサク、タフで歯ごたえのある鶏肉、細切りにんじん、薄くスライスしたきゅうりを組み合わせ、甘酸っぱい味わいで恍惚とした味わいです。',
            'photo' => 'image/nom-ga-8.jpg',
            'price' => 900
        ]);

        DB::table('products')->insert([
            'name' => 'VN:đậu phụ chiên
                        JP:ベトナム風厚揚げ豆腐',
            'description' => 'いわゆる日本の「厚揚げ」をイメージしていたらびっくりするかも…。超高温の油で素揚げし、外かりっ！中ふわっ！特製の厚揚げ豆腐をナンプラーであまじょっぱく味付け。おつまみにぴったりです！',
            'photo' => 'image/dau-phu-chien-9.jpg',
            'price' => 700
        ]);
    }
}
