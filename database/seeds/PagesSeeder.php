<?php

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'id'=>'1',
            'description' => '<div class="col-sm-4 want">
        <img src="/img/ps11.jpg">
        <h3>Хочеш дізнатися?</h3>
    </div>

    <div class="col-sm-4 want">
        <img src="/img/ps21.jpg">
<h3>Прагнеш чогось?</h3>
    </div>

    <div class="col-sm-4 want">
        <img src="/img/ps31.jpg">
<h3>Цікавишся чимось?</h3>
    </div>





        <div class="col-sm-12 pidgotovka">
            <p class="centr"><i>Якщо ти хочеш навчитися знімати кіно та обробляти відеоконтент, якщо ти хочеш вміти монтувати
                    відеокліпи та створювати візуальні ефекти, якщо ти бажаєш знати про все про звукозапис та обробку
                    звуку, якщо тебе цікавить, як створений тобою контент передати за допомогою різних
                    телекомунікаційних технологій, тоді тобі до нас – на кафедру звукотехніки та реєстрації
                    інформації!</i></p>
           <p class="centr"><a href="http://kaf-ztri.kpi.ua/wp-content/uploads/2018/03/Ztri2018_A4L_NEW2_Preview.pdf">
                   Завантаж наш буклет</a></p>
            <p>Кафедра – єдина в Україні, що готує технічних спеціалістів для телебачення та кінематографа за
                спеціалізацією</p>
            <h3 class="centr" style="color: cornflowerblue">«Електронні та інформаційні технології кінематографії та
                аудіовізуальних систем»</h3>
            <p>та фахівців у галузі електронних та інформаційних технологій за спеціалізацією</p>
            <h3 class="centr" style="color: cornflowerblue">«Електронні засоби Інтернету речей та систем відеоспостереження»</h3>
            <p>Ми запрошуємо тебе до славетної когорти фахівців систем і технологій телебачення, відеотехніки та
                звуковідтворення, систем сучасного кінематографа, мультимедійних телекомунікаційних систем,
                мобільного зв’язку.</p>
        </div>




        <div class="col-sm-5 pid">
        <h3>Три рівні підготовки:</h3>
        <ul>
            <li>бакалавр</li>
            <li>магістр</li>
            <li>доктор філософії</li>
            <a href=\'{{ url(\'/specialization\') }}\' class=\'btn btn-info\' role=\'button\' >Докладніше</a>
        </ul>
    </div>

        <div class="col-sm-6 pid">
            <img id="graduates" src="/img/graduates.jpg">
        </div>




        <div class="col-sm-12 pidgotovka">
            <h3>Акценти в освіті:</h3>
            <ul>
                <li>загальне програмування: С++, С#, Matlab, HTML, PHP, SQL, JavaScript, Python;</li>
                <li>відеомонтаж, обробка звуку, візуальні ефекти: Adobe Premiere, Avid Composer, Edius; Sound Forge,
                    Nuendo; Adobe After Effects, Design Fusion; Blender, Autodesk Maya, Cinema 4D, Motion Capture;</li>
                <li>застосування професійних IT технологій: Cisco Packet Tracer, Atoll, Cell Planner, Riverbed Modeler,
                    nanoCAD СКС;</li>
                <li>безпроводові та проводові технології передавання контенту (Wi-Fi, 3G/4G, VSAT, DVB, FTTB, FTTH,
                    CATV, Інтернет речей);</li>
                <li>платформи для Інтернету речей (Arduino, Raspberry Pi);</li>
                <li>інтерактивні методи навчання (академія Cisco);</li>
                <li>практична та наукова діяльність студентів.</li>
            </ul>
        </div>



        <div class="col-sm-12 pidgotovka">
            <h3>Випускники кафедри працюють</h3>
            <p>як інженери, наукові співробітники, адміністратори, розробники, асистенти творчих працівників в таких
                сферах: телебачення та радіомовлення; кінематограф та кіноіндустрія; комп’ютерні технології та
                програмне забезпечення; звукозапис; відеозйомка; озвучення приміщень та просторів; відеодизайн,
                мультиплікація та анімація; шоу-індустрія; проекція зображень великих розмірів; сценічне та спеціальне
                освітлення; технічна охорона об’єктів засобами відеоспостереження; аудіо-, відео-, побутове обладнання
                житлових будинків; мобільний зв’язок; мультисервісні мережі; проводовий та безпроводовий зв’язок, а
                також супутниковий зв’язок; глобальні та локальні мережі; мережі обслуговування інженерного та
                побутового обладнання житлових приміщень та будинків, захист та відновлення інформації.</p>
        </div>






        <div class="col-sm-12 pidgotovka">
            <h3>Де працюють наші випускники</h3>
            <img src="/img/lgt.jpg" class="work">
            <img src="/img/lictv.jpg" class="work">
            <img src="/img/lKievstar.jpg" class="work">
            <img src="/img/llifecell.jpg" class="work">
            <img src="/img/lpershi-nacionalnyi.jpg" class="work">
            <img src="/img/lSZU.jpg" class="work">
            <img src="/img/ltrkukr.jpg" class="work">
            <img src="/img/lukrtelekom.jpg" class="work">
            <img src="/img/lvega-telecom.jpg" class="work">
            <img src="/img/lvodafone.jpg" class="work">
            <img src="/img/lVolia.jpg" class="work">
            <img src="/img/llanet.jpg" class="work">
            <img src="/img/l11.jpg" class="work">
        </div>



        <div class="col-sm-12 pidgotovka">
    <div class="slider">
        <div><iframe src="https://www.youtube.com/embed/fUsaLUxp_tU" frameborder="0"
                     allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
        <div><iframe src="https://www.youtube.com/embed/dG-vnzRSj9Q" frameborder="0"
                      allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
        <div><iframe  src="https://www.youtube.com/embed/cePBqQI2qmQ" frameborder="0"
                         allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
        <div><iframe  src="https://www.youtube.com/embed/2JPh_ZkB97c" frameborder="0"
                      allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
        <div><iframe src="https://www.youtube.com/embed/q9lBos5ZgBk" frameborder="0"
                     allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    </div>
        </div>




        <div class="col-sm-12 pidgotovka">
            <div id="googleMap" style="width:100%;height:300px;"></div>
        </div>',
            'name' => 'index',
            'created_at' => '2019-01-01',
            'updated_at' => '2019-01-01',
        ]);
        Page::create([
            'id'=>'2',
            'description' => '',
            'name' => 'about',
            'created_at' => '2019-01-01',
            'updated_at' => '2019-01-01',
        ]);
        Page::create([
        'id'=>'3',
        'description' => '<h3>Про спеціалізацію</h3>
        <p>Кафедра забезпечує підготовку фахівців за триступеневим принципом:</p>
        <ul>
            <li><b>бакалавр</b> з електроніки (термін навчання – 4 роки);</li>
            <li><b>магістр</b> з електроніки, спеціалізація <i style="color: blue">Електронні та інформаційні технології
                    кінематографії та аудіовізуальних систем</i> (терміни навчання за освітньо-професійною
                програмою підготовки – 1 рік 4 місяці, за освітньо-науковою
                програмою підготовки – 1 рік 9 місяців).</li>
            <li><b>доктор філософії</b>(PhD) у галузі електроніки (термін навчання – 4 роки).</li>
        </ul>
        <p>Кафедру створено у 1930 році як кафедру кінотехніки у складі Інституту кінематографії (Київського інституту
            кіноінженерів), який згодом увійшов до складу КПІ.</p>
        <p>Ми підготували велику кількість спеціалістів для телерадіомовлення, кіноіндустрії, шоу-індустрії, наукових
            та громадських організацій тощо, значну кількість кандидатів та докторів наук.</p>
        <p>Випускники кафедри працюють як інженери, наукові співробітники, адміністратори, розробники, асистенти
            творчих працівників у таких галузях:</p>
        <ul>
            <li>телебачення та радіомовлення;</li>
            <li>кінематограф та кіноіндустрія;</li>
            <li>комп’ютерні технології та програмне забезпечення;</li>
            <li>звукозапис;</li>
            <li>відеозйомка;</li>
            <li>озвучення приміщень та просторів;</li>
            <li>відеодизайн, мультиплікація та анімація;</li>
            <li>шоу-індустрія;</li>
            <li>проекція зображень великих розмірів;</li>
            <li>сценічне та спеціальне освітлення;</li>
            <li>технічна охорона об’єктів засобами відеоспостереження;</li>
            <li>мобільний зв’язок;</li>
            <li>мультисервісні телекомунікаційні мережі та супутниковий зв’язок;</li>
            <li>мережі обслуговування інженерного та побутового обладнання житлових приміщень та будинків;</li>
            <li>захист та відновлення інформації.</li>
        </ul>
        <p>Кафедра має сучасну комп’ютерну базу з необхідним програмним забезпеченням, студійне звукотехнічне та
            відеотехнічне обладнання, робочі місця для оброблення аудіо- та відеосигналів, акустичний кабінет,
            кінотехнічний комплекс, системи домашнього кінотеатру.
        </p>
        <p>Під час навчання значну увагу приділяють <b>творчому підходу</b> до вивчення дисциплін, виявленню творчих
            здібностей у студентів та застосуванню їх у майбутній професії. Зокрема, студенти знайомляться з
            особливостями звуко- та відеорежисури, кіно- та відеоператорства, організації видовищних заходів,
            шоу-індустрії.
        </p>
        <p>Під час виконання лабораторних робіт студенти знімають і монтують відеофільми про студентське життя,
            навчальні та рекламні відео та звукові ролики, які беруть участь у щорічному факультетському конкурсі
            <i>«Студентська творчість»</i> з компетентним журі, до якого входять викладачі, студенти, відомі творчі
            особистості, яке оцінює якість фільму, а також винахідливість як технічних, так і творчих прийомів.
        </p>
        <p>Студенти нашої кафедри, що навчаються за спеціальністю «Електроніка», спеціалізація <i style="color: blue">
                Електронні та інформаційні технології кінематографії та аудіовізуальних систем,</i> проходять практику,
            а випускники працюють в таких установах:
        </p>
        <ul>
            <li>телерадіокомпаніях UA: Перший, Студія 1+1, ICTV, ТРК Україна, Інтер, Кіносвіт, Міжнародний Медіа Центр
                – СТБ, Національна кіностудія художніх фільмів ім. О.Довженка, Будинок звукозапису ТРМ, Акустичні
                матеріали, Тріумф Медіа Груп, Громадське телебачення,Школа телебачення «Прайм Медіа», Інженер-Сервіс,
                Одеська студія мультиплікації;</li>
            <li>Астеліт (lifecell), Київстар, Vodafone Україна, Укртелеком, Укрнет, Інком, Бліц-Інформ, Українські
                новітні технології, Національні інформаційні системи, Lanet, Вега-телеком, Радіоконнект, Воля-кабель,
                Телесистеми України та багато інших, в тому числі іноземних.</li>
        </ul>
<p>Кафедра підтримує зв’язки з Німеччиною (Магдебурзький технічний університет), Польщею (Варшавська та Вроцлавська
    політехніки), Молдавією, Болгарією (Варненський технічний університет), Швецією, Францією (Університет Монпельє),
    Італією (Університет Тренто), Ізраїлем, США (Рочестерський університет), де студенти мають можливість навчання
    та стажування.
</p>
        <p>Ми також здійснюємо підготовку українських та іноземних студентів англійською мовою. Понад 100
            студентів-іноземців успішно працюють за фахом у відомих українських та іноземних компаніях.
        </p>',
        'name' => 'specialization',
        'created_at' => '2019-01-01',
        'updated_at' => '2019-01-01',
    ]);
        Page::create([
            'id'=>'4',
            'description' => '<h3>Вступ на 1 курс (за сертифікатами ЗНО)</h3>
        <p>Під час вступу на перший курс подання сертифікатів Українського центру оцінювання якості освіти з
            результатами проходження у поточному році зовнішнього незалежного оцінювання є обов’язковим, крім випадків,
            передбачених Умовами прийому до вищих навчальних закладів України та іншими нормативними документами.</p>
        <p>В 2018 році враховують сертифікати ЗНО <b>2017</b> та <b>2018</b> років, окрім сертифіката з іноземної
            мови – прийматимуть лише сертифікат за <b>2018</b> рік.</p>
        <table border="1">
            <tr>
                <th>Найменування спеціальності</th>
                <th>Найменування спеціалізації</th>
                <th>Перелік сертифікатів (вагові коефіцієнти)</th>
                <th>Мінімальна кількість балів для допуску до участі в конкурсі або зарахування на навчання
                    за квотою, за співбесідою</th>
            </tr>
            <tr><td rowspan="2">171 Електроніка</td>
                <td rowspan="2">Електронні та інформаційні технології кінематографії та аудіовізуальних систем</td>
                <td>Математика (0,5)
                    Фізика або іноземна мова (0,2)</td>
                <td>Один не менше 125 за умови, що інший не менше 100</td>
            </tr>
            <tr>
                <td>Українська мова та література (0,2)</td>
                <td>100</td>
            </tr>
        </table>
        <p>
            <a href="http://kaf-ztri.kpi.ua/wp-content/uploads/2018/03/Dokumenty_vstup.pdf">Перелік документів</a>,
            необхідних для вступу до КПІ ім. Ігоря Сікорського.
        </p>
        <p>
            <a href="http://pk.kpi.ua/documents/">Офіційні документи</a> на сайті Приймальної комісії.
        </p>
        <p>
            <a href="http://pk.kpi.ua/entry-1-course/">Більше інформації</a> про вступ на 1 курс за сертифікатами ЗНО
            можна знайти на сайті Приймальної комісії.
        </p>',
            'name' => 'firstzno',
            'created_at' => '2019-01-01',
            'updated_at' => '2019-01-01',
        ]);
        Page::create([
            'id'=>'5',
            'description' => '<h3>Вступ на 1 курс (на базі молодшого спеціаліста)</h3>
            <p>Особи, які отримали освітньо-кваліфікаційний рівень «молодший спеціаліст», мають право брати участь
                у конкурсі за результатами зовнішнього незалежного оцінювання або <b>вступних іспитів</b> з таких
                конкурсних предметів:</p>
<ol>
    <li>Математика</li>
    <li>Фізика</li>
</ol>
            <p><b>Термін навчання</b></p>
            <p>бакалавр (на базі молодшого спеціаліста ) – 2 роки 10 місяців (3 навчальні роки).</p>
            <p>Ліцензійні обсяги набору абітурієнтів за освітнім рівнем «бакалавр» для вступників на основі здобутого
                освітньо-кваліфікаційного рівня «молодший спеціаліст»</p>
<table border="1">
    <tr>
        <th>Спеціальність</th>
        <th>Спеціалізація</th>
        <th colspan="2">Ліцензійний обсяг (для вступників на основі ОКР «молодший спеціаліст»)</th>
    </tr>
    <tr>
        <td rowspan="2">171 Електроніка</td>
        <td rowspan="2">Електронні та інформаційні технології кінематографії та аудіовізуальних систем</td>
        <td>денна</td>
        <td>заочна</td>
    </tr>
    <tr>
        <td>20</td>
        <td>0</td>
    </tr>
</table>
            <p>*Заплановано набір абітурієнтів за кошти фізичних та юридичних осіб  (в рамках ліцензованого обсягу)</p>
            <p><a href="http://pk.kpi.ua/entry-1-course-ms/">Більше інформації</a> про вступ на 1 курс на базі диплома молодшого спеціаліста.</p>
        ',
            'name' => 'firstms',
            'created_at' => '2019-01-01',
            'updated_at' => '2019-01-01',
        ]);
        Page::create([
            'id'=>'6',
            'description' => '<h3>Вступ на 5 курс</h3>
            <p>Прийом документів (подання заяв) та проведення конкурсних заходів проводять у такі строки:</p>
            <ul>
                <li>прийом документів (подання заяв): з 03.07 до 07.07 та з 24.07 до 04.08.2018 р.;</li>
                <li>вступні випробування  (фахові, з іноземної мови та додаткові): з 08.07 до 15.07 або з 05.08
                    до 11.08.2018 р. згідно з розкладом, затвердженим головою відповідної атестаційної комісії.</li>
            </ul>
            <p>З 2015 року допускають прийом на навчання за програмами підготовки магістра на основі ступеня бакалавра,
                здобутого за іншою спеціальністю, за умови успішного проходження додаткових вступних випробувань.</p>
            <table border="1">
                <tr>
                    <th>Спеціальність</th>
                    <th>Спеціалізація</th>
                </tr>
                <tr>
                    <td>171 Електроніка</td>
                    <td>Електронні та інформаційні технології кінематографії та аудіовізуальних систем</td>
                </tr>
            </table>
                <p><b>Перелік документів для вступу:</b></p>
                <ul>
                    <li>паспорт або інший документ, що засвідчує громадянство (оригінал та копії);</li>
                    <li>диплом бакалавра (оригінал та копії);</li>
                    <li>додаток до диплому бакалавра (оригінал та копії);</li>
                    <li>творчі досягнення, якщо такі наявні (наукові статті за обраною спеціальністю);</li>
                    <li>військовий документ (для хлопців, оригінал та копії);</li>
                    <li>ідентифікаційний код (оригінал та копії);</li>
                    <li>шість фотографій.</li>
                </ul>
            <p>Копії завіряють у відбіркових комісіях факультетів та інститутів за наявності оригіналу. Для подання
                документів у відбіркових комісіях потрібно залишити копії документів.</p>
            <p>Програму <b>додаткового вступного випробування</b> на 5-й курс факультету електроніки (якщо ступінь
                бакалавра, здобутий за іншим напрямом підготовки) за  спеціалізацією “Електронні та інформаційні
                технології кінематографії та аудіовізуальних систем”
                <a href="http://kaf-ztri.kpi.ua/wp-content/uploads/2018/04/vstup_2018_mag_dodatk_prog.pdf">можна
                    завантажити у форматі .pdf.</a></p>
            <p>Дисципліни <b>комплексного фахового випробування</b> за спеціалізацією “Електронні та інформаційні
                технології кінематографії та аудіовізуальних систем”:</p>
            <ol>
                <li>Теорія електричних кіл.</li>
                <li>Основи теорії телекомунікацій.</li>
                <li>Теорія інформації та кодування.</li>
                <li>Системи радіо –  та телевізійного мовлення</li>
            </ol>
            <p>Програму комплексного фахового випробування можна
                <a href="http://kaf-ztri.kpi.ua/wp-content/uploads/2018/04/vstup_2018_mag_171_fah_prog.pdf">
                    завантажити в форматі .pdf</a>.</p>
            <p><a href="http://pk.kpi.ua/entry-5-course/">Більше інформації</a> про вступ на 5 курс можна дізнатися з
                сайту Приймальної комісії.</p>',
            'name' => 'fifthyear',
            'created_at' => '2019-01-01',
            'updated_at' => '2019-01-01',
        ]);
        Page::create([
            'id'=>'7',
            'description' => '<h3>Наукова школа</h3>
            <p>На кафедрі звукотехніки функціонує наукова школа <i>«Удосконалення технологій та технічних засобів створення
                    і розповсюдження аудіо-візуального контенту»,</i> заснована заслуженим діячем науки і техніки
                України, лауреатом державної премії України, д.т.н., професором <b>В.Г. Абакумовим</b>.</p>
            <p>Після виходу В.Г. Абакумова на пенсію роботу наукової школи очолили доктори технічних наук, професори
                Г.М. Розорінов та Г.Г. Власюк. Традиційними напрямами досліджень є технології оброблення звукових та
                відеосигналів, системи та засоби передавання і зберігання аудіо-візуальної інформації.</p>
            <p>Професор Г.Г. Власюк започаткувала новий напрям наукових досліджень, пов’язаний зі створенням
                тривимірних об’єктів віртуальної реальності та комп’ютерною анімацією.  До наукової роботи в межах
                тематики наукової школи долучилась і наукова група професора В.В. Пілінського. Фахівці цієї групи
                зосереджені головним чином на вирішенні проблем електромагнітної сумісності аудіовізуальних технічних
                засобів та засобів передавання мультимедійної інформації.</p>
            <p>На тепер всі НПП кафедри здійснюють наукові дослідження за напрямами діяльності наукової школи.</p>',
            'name' => 'scientific_school',
            'created_at' => '2019-01-01',
            'updated_at' => '2019-01-01',
        ]);
        Page::create([
            'id'=>'8',
            'description' => '<h3>Наукові групи</h3>
            <p>Наукові напрями і групи:</p>
            <ol class="naukg">
                <li><i>Запис-відтворення сигналів кіно і телебачення (твердотільний, оптичний, магнітний),  системи їх
                        захисту від несанкціонованого доступу та методи перетворення аудіо- і відеосигналів.</i>
                    Науковий керівник – д.т.н., проф.<b>Розорінов Г.М.</b> В групі <b>8</b> студентів.
                    Група виконує <b>3</b> ініціативні НДР:</li>
                <ul>
                    <li>“Захист конфіденційної інформації на твердотільних носіях”. Держ. реєстр. № 0117U002167.
                        Термін виконання 02.2017 – 12.2019.</li>
                    <li>“Методи і засоби керування водовідливними установками”. Держ. реєстр. № 0117U002168. Термін
                        виконання 02.2017 – 12.2019.</li>
                    <li>“Моделювання активних елементів ультразвукового обладнання на основі методу симетрій”. Держ.
                        реєстр. № 0117U000202. Термін виконання 02.2017 – 02.2020.</li>
                </ul>
                <li><i>Створення звукових і відео програм, організація інформаційно-розважальних заходів, технічне
                        забезпечення кіно і телебачення, включаючи оптику і світлотехніку.</i> Науковий керівник –
                    к.т.н., доц. <b>Швайченко В.Б.</b> В групі <b>5</b> студентів.</li>
                <li><i>Вдосконалення проводових і безпроводових інформаційно-комунікаційних систем і мереж для
                        передавання аудіовізуального контенту, забезпечення їх безпеки, технічний зір.</i>
                    Науковий керівник – к.т.н., доц. <b>Лазебний В.С.</b> В групі <b>13</b> студентів. Група виконує
                    <b>1</b> ініціативну НДР:</li>
                <ul>
                    <li>“Удосконалення процесу передавання аудіовізуальної інформації засобами безпроводових мереж”.
                        Держ. реєстр. № 0117U001676. Термін виконання 07.2017 – 12.2018.</li>
                </ul>
                <li><i>Застосування комп’ютерної багатовимірної графіки для створення спецефектів у кіно і телебаченні,
                        нелінійний монтаж аудіо- і відеоматеріалів, вимірювання параметрів сигналів і устаткування.</i>
                    Науковий керівник – д.т.н., проф. <b>Власюк Г.Г.</b> В групі <b>5</b> студентів. Група виконує
                    <b>1</b> ініціативну НДР:</li>
                <ul>
                    <li>“Автоматизовані технології оптимізації процесів життєдіяльності студентів”. Держ. реєстр.
                        № 0117U000457. Термін виконання 02.2017 – 12.2019.</li>
                </ul>
                <li><i>Електромагнітна сумісність, електроживлення, надійність, електромагнітна екологія систем кіно
                        і телебачення.</i> Науковий керівник – к.т.н., проф. <b>Пілінський В.В.</b> В групі <b>7</b>
                    студентів. Група виконує <b>1</b> НДР:</li>
                <ul>
                    <li>Госпдоговірна НДР “Гармонізація Європейських стандартів в Україні (8 стандартів у галузі ЕМС)
                        для різної електронної апаратури”.</li>
                </ul>
            </ol>',
            'name' => 'scientific_groups',
            'created_at' => '2019-01-01',
            'updated_at' => '2019-01-01',
        ]);
        Page::create([
            'id'=>'9',
            'description' => '<h3>Дні відкритих дверей</h3>
            <p>
                <b>21 квітня 2018 р.</b> відбудеться День відкритих дверей КПІ ім. Ігоря Сікорського <b>KPI Science
                    Fest.</b></p>
            <p>Місце проведення – 1 корпус, Велика фізична аудиторія (корпус 1), Державний політехнічний музей, НТБ ім.
                Г.І. Денисенка, навчальні підрозділи КПІ ім. Ігоря Сікорського.</p>
<p>Час проведення – з 09.00 до 15.00:</p>
            <ul>
                <li>09.00 – реєстрація учасників (корпус 1);</li>
                <li>09.00 – 12.00 – робота майданчиків (майстер-класи, презентації, тематичні конкурси, інформація про
                    навчальні підрозділи, розповсюдження профорієнтаційних матеріалів), консультаційних та
                    інформаційних пунктів;</li>
                <li>11.00 – 12.00 – загальні збори у Великій фізичній аудиторії, інформація щодо Правил прийому до КШ
                    ім. Ігоря Сікорського у 2018 році;</li>
                <li><b>12.00 – 15.00</b> – «Дні відкритих дверей» факультетів/інститутів, зокрема, на
                    <b><i style="color: cornflowerblue">факультеті електроніки</i></b> та
                    <b><i style="color: cornflowerblue">кафедрі звукотехніки та реєстрації інформації</i></b>
                    (12 корпус).</li>
            </ul>
            <p>Дні відкритих дверей для абітурієнтів на <b>кафедрі</b>:</p>
            <table border="1" class="opendaystab">
                <th>День</th>
                <th>Час</th>
                <th>Аудиторія</th>
                <tr>
                    <td>23 квітня 2018 р.</td>
                    <td>15.00</td>
                    <td>215б, 12 корп.</td>
                </tr>
                <tr>
                    <td>2 травня 2018 р.</td>
                    <td>15.00</td>
                    <td>215б, 12 корп.</td>
                </tr>
                <tr>
                    <td>14 травня 2018 р.</td>
                    <td>15.00</td>
                    <td>215б, 12 корп.</td>
                </tr>
                <tr>
                    <td>23 травня 2018 р.</td>
                    <td>15.00</td>
                    <td>215б, 12 корп.</td>
                </tr>
                <tr>
                    <td>4 червня 2018 р.</td>
                    <td>15.00</td>
                    <td>215б, 12 корп.</td>
                </tr>
            </table>
            <p>Дні відкритих дверей на <b>факультеті електроніки</b>:</p>
            <table border="1" class="opendaystab">
                <th>День</th>
                <th>Час</th>
                <th>Аудиторія</th>
                <tr>
                    <td>20 квітня 2018 р.</td>
                    <td>17.00</td>
                    <td>412, 12 корп.</td>
                </tr>
                <tr>
                    <td>18 травня 2018 р.</td>
                    <td>17.00</td>
                    <td>412, 12 корп.</td>
                </tr>
                <tr>
                    <td>30 червня 2018 р.</td>
                    <td>12.00</td>
                    <td>412, 12 корп.</td>
                </tr>
            </table>
            <p>Відповідальний за роботу з абітурієнтами на кафедрі: <b>Гребінь Олександр Павлович</b></p>
            <p>Телефон для довідок: (050) 330-83-54</p>
            <img src="/img/opendays.jpg" id="openimg">',
            'name' => 'opendays',
            'created_at' => '2019-01-01',
            'updated_at' => '2019-01-01',
        ]);
        Page::create([
            'id'=>'10',
            'description' => '<h3>Розклад занять</h3>
<a href="/docs/Rozklad-2017-18_1.pdf">Розклад занять на весняний семестр 2017-2018 н.р.</a>',
            'name' => 'rozklad',
            'created_at' => '2019-01-01',
            'updated_at' => '2019-01-01',
        ]);
        Page::create([
            'id'=>'11',
            'description' => '<h3>Куратори груп</h3>
            <p>Куратори та старости навчальних груп (2017-2018 н.р.)</p>
            <img src="/img/kuratory_starosty-2018.png" id="cur">',
            'name' => 'kuratory',
            'created_at' => '2019-01-01',
            'updated_at' => '2019-01-01',
        ]);
        Page::create([
            'id'=>'12',
            'description' => '<h3>Навчальні плани</h3>
            <p>Витяг з навчального плану підготовки бакалаврів за спеціальністю 171 Електроніка, спеціалізація
                “Електронні та інформаційні технології кінематографії та аудіовізуальних систем” (набір 2017 р.)<p>
                <ul>
                <li><a href="/docs/2.06_NP_bak_2017_Electronika_ZTRI.pdf">Завантажити у .pdf форматі</a></li>
                <li><a href="/docs/2.06_NP_bak_2017_Electronika_ZTRI.xls"> Завантажити у .xls форматі</a></li>
            </ul>
            <p>Витяг з інтегрованого навчального плану підготовки бакалаврів за спеціальністю 171 Електроніка,
                спеціалізація “Електронні та інформаційні технології кінематографії та аудіовізуальних систем”
                (набір 2017 р.) </p>
            <ul>
                <li><a href="/docs/Integrov_NP_bak_2017_Elektronika_ZTRI.pdf">Завантажити у .pdf форматі</a></li>
                <li><a href="/docs/Integrov_NP_bak_2017_Elektronika_ZTRI.xls"> Завантажити у .xls форматі</a></li>
            </ul>
            <p>Витяг з навчального плану підготовки магістрів за спеціальністю 171 Електроніка, спеціалізація
                “Електронні та інформаційні технології кінематографії та аудіовізуальних систем” за
                <b>освітньо-науковою</b> програмою магістерської підготовки (набір 2017 р.)</p>
            <ul>
                <li><a href="/docs/NP_MAG_2017_nauk_Elektronika_ZTRI.pdf">Завантажити у .pdf форматі</a></li>
                <li><a href="/docs/NP_MAG_2017_nauk_Elektronika_ZTRI.xls"> Завантажити у .xls форматі</a></li>
            </ul>
            <p>Витяг з навчального плану підготовки магістрів за спеціальністю 171 Електроніка, спеціалізація
                “Електронні та інформаційні технології кінематографії та аудіовізуальних систем” за
                <b>освітньо-професійною</b> програмою магістерської підготовки (набір 2017 р.)</p>
            <ul>
                <li><a href="/docs/NP_MAG_2017_prof_Elektronika_ZTRI.pdf">Завантажити у .pdf форматі</a></li>
                <li><a href="/docs/NP_MAG_2017_prof_Elektronika_ZTRI.xls"> Завантажити у .xls форматі</a></li>
            </ul>',
            'name' => 'navchalni_plany',
            'created_at' => '2019-01-01',
            'updated_at' => '2019-01-01',
        ]);
        Page::create([
            'id'=>'13',
            'description' => '            <h3>Студентське життя</h3>
            <p><b>Студентське життя</b> – це не тільки складання іспитів і заліків. Студентські роки – це той час у
                житті людини, коли відбуваються найяскравіші відкриття, а бажання рухатися вперед змушує домагатися
                більших успіхів. Ця прекрасна пора, про яку мріє, мабуть, кожний школяр, за всіх часів була і є
                символом молодості, веселощів і першої любові. Студентські роки – це доросле й повноцінне життя, яке ще
                не увійшло в колію буденності. Саме цей період є найбільш важливим для накопичення знань, підвищення
                ерудиції, вивчення іноземних мов. Студентство – це відмінний шанс побачити світ, приєднавшись до однієї
                з численних програм обміну, це пора нових знайомств і знаходження міцної дружби на довгі, довгі роки.</p>
            <img src="/img/photo_stud1.jpg" class="studpic">
            <p>Студентське життя приносить багато радості. «Від сесії до сесії живуть студенти весело». А скільки всього
                ще доведеться пережити! Це записки на лекціях і посиденьки на поляні під гітару, це студентська весна,
                це нові люди, це невимовна радість, коли виходиш із аудиторії, махаєш заліковкою та стрибаєш від щастя,
                коли здав останній іспит, але це й кропітка праця, з якою легше впоратись дружньою студентською сім’єю.
                Немає на світі нікого, щасливішого ніж студенти, це особливий стан душі, це вічна весна, сонце, любов,
                це найчудовіший час у житті.</p>
            <div class="col-sm-6">
                <ul>
                    <li>Студентське життя – це коли готуєшся до пари цілу ніч, а потім у найвідповідальніший момент
                        засинаєш.</li>
                    <li>Студентське життя – це коли ходиш у кіно винятково «у студентський день», тому що діє знижка.</li>
                    <li>Студентське життя – це коли заводиш надцять будильників, щоб не проспати 1-шу пару.</li>
                    <li>Студентське життя – це коли кожного семестру обіцяєш собі почати вчитися.</li>
                    <li>Студентське життя – це новий, дорослий світ з нотками дитинства.</li>
                </ul>
            </div>
            <div class="col-sm-6">
                <img src="/img/photo_stud2.jpg" id="studpic2">
            </div>
            <div class="col-sm-12"
            <p>Студенти нашої кафедри вдало поєднують час навчання і розваг. Разом цікавіше і готуватись до іспитів, і
                святкувати Новий рік та День студента, проводити наукові дослідження і відпочивати влітку. Ми як одна
                велика і дружня родина. На тебе, крім теорем і задач, чекають незабутні Дні першокурсника, святкування
                Дня факультету, різноманітні конкурси, квести. Ми не дамо тобі сумувати! Приєднуйся до нашої сім’ї! </p>
        </div>
            <img src="/img/photo_stud3.jpg" class="studpic">',
            'name' => 'student_life',
            'created_at' => '2019-01-01',
            'updated_at' => '2019-01-01',
        ]);
        Page::create([
            'id'=>'14',
            'description' => '',
            'name' => 'file_archive',
            'created_at' => '2019-01-01',
            'updated_at' => '2019-01-01',
        ]);

    }
}
