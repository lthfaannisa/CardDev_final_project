# CardDev-Sistem Biodata Alumni

## Members

<li>Nabilah Qurratul Annisa (2108107010010)</li>
<li>Nuzululrrahmah (2108107010012)</li>
<li>Kelsy Amirah (2108107010054)</li>
<li>Putri Sakinatul Maulida (2108107010062)</li>
<li>Laila Asrin (2108107010068)</li>
<li>Annisa Lathifa (2108107010088)</li>

### About
<hr>
<p>Sistem Informasi Biodata Alumni adalah sebuah sistem yang dirancang untuk mengumpulkan, menyimpan, <br>
dan mengelola data biodata para alumni. Tujuan utama dari sistem ini adalah memudahkan institusi dalam <br>
melacak dan berinteraksi dengan para alumni. Dengan adanya sistem ini, institusi dapat dengan mudah mengakses <br>
informasi terkait profil pribadi dari para alumni.</p>


 ### How to run this application in your local (laravel project)
 <hr>
1. Clone or download this repository
<pre><code>https://github.com/lthfaannisa/CardDev-SistemBiodataAlumni.git</code></pre>
2. Rename .env.example file to .env<br>
3. Run composer install
<pre><code>composer install</code></pre>
4. Create a database in your local
<pre><code>create database SIMBA;</code></pre>
5. Setting database in .env file
<pre><code>DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=SIMBA<br>
DB_USERNAME=<your_username><br>
DB_PASSWORD=<your_password></code></pre>
6. Install scout via the composer package manager
<pre><code>composer require laravel/scout</code></pre>
7. Setting scout driver in .env file (add that in last line)
<pre><code>SCOUT_DRIVER=database</code></pre>
8. Run npm install
<pre><code>npm install</code></pre>
9. Run sudo npm run dev or npm run dev
<pre><code>sudo npm run dev</code></pre>
<pre><code>npm run dev</code></pre>
10. Run php artisan migrate
<pre><code>php artisan migrate</code></pre>
11. Run php artisan migrate:key
<pre><code>php artisan migrate:key</code></pre>
12. Run php artisan serve
<pre><code>php artisan serve</code></pre>

<b>Now, you can access the project at localhost:8000 :D<b>
