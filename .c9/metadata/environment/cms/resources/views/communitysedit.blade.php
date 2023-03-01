{"filter":false,"title":"communitysedit.blade.php","tooltip":"/cms/resources/views/communitysedit.blade.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":0,"column":0},"end":{"row":87,"column":15},"action":"insert","lines":["<!-- resources/views/booksedit.blade.php -->","<x-app-layout>","","    <!--ヘッダー[START]-->","    <x-slot name=\"header\">","        <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","            <form action=\"{{ route('book_index') }}\" method=\"GET\" class=\"w-full max-w-lg\">","                <x-button class=\"bg-gray-100 text-gray-900\">{{ __('Dashboard') }}：更新画面</x-button>","            </form>","        </h2>","    </x-slot>","    <!--ヘッダー[END]-->","            ","        <!-- バリデーションエラーの表示に使用-->","        <x-errors id=\"errors\" class=\"bg-blue-500 rounded-lg\">{{$errors}}</x-errors>","        <!-- バリデーションエラーの表示に使用-->","    ","    <!--全エリア[START]-->","    <div class=\"flex bg-gray-100\">","","        <!--左エリア[START]--> ","        <div class=\"text-gray-700 text-left px-4 py-4 m-2\">","            ","            <div class=\"bg-white overflow-hidden shadow-sm sm:rounded-lg\">","                <div class=\"p-6 bg-white border-b border-gray-500 font-bold\">","                    本を管理する","                </div>","            </div>","","","            <!-- 本のタイトル -->","            <form action=\"{{ url('books/update') }}\" method=\"POST\" class=\"w-full max-w-lg\">","                @csrf","                ","                  <div class=\"flex flex-col px-2 py-2\">","                   <!-- カラム１ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                       Book Name","                      </label>","                      <input name=\"item_name\" value=\"{{$book->item_name}}\" class=\"appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム２ -->","                    <div class=\"w-full md:w-1/1 px-3\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                        金額","                      </label>","                      <input name=\"item_amount\" value=\"{{$book->item_amount}}\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム３ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                        数","                      </label>","                      <input name=\"item_number\" value=\"{{$book->item_number}}\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム４ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-6 md:mb-0\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                        発売日","                      </label>","                      <input name=\"published\" type=\"datetime-local\" value=\"{{$book->published}}\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\"  placeholder=\"\">","                    </div>","                  </div>","                  <!-- カラム５ -->","                  <div class=\"flex flex-col\">","                      <div class=\"text-gray-700 text-center px-4 py-2 m-2\">","                             <x-button class=\"bg-blue-500 rounded-lg\">更新</x-button>","                      </div>","                   </div>","                <!-- id値を送信 -->","                <input type=\"hidden\" name=\"id\" value=\"{{$book->id}}\">","                <!--/ id値を送信 -->","            </form>","        </div>","        <!--左エリア[END]--> ","    ","    ","    <!--右側エリア[START]-->","    <div class=\"flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2\">","      ","    </div>","    <!--右側エリア[[END]-->       ","","</div>"," <!--全エリア[END]-->","","</x-app-layout>"],"id":1}],[{"start":{"row":6,"column":36},"end":{"row":6,"column":40},"action":"remove","lines":["book"],"id":2},{"start":{"row":6,"column":36},"end":{"row":6,"column":45},"action":"insert","lines":["community"]}],[{"start":{"row":40,"column":56},"end":{"row":40,"column":60},"action":"remove","lines":["book"],"id":4},{"start":{"row":40,"column":56},"end":{"row":40,"column":65},"action":"insert","lines":["community"]}],[{"start":{"row":47,"column":58},"end":{"row":47,"column":62},"action":"remove","lines":["book"],"id":5},{"start":{"row":47,"column":58},"end":{"row":47,"column":67},"action":"insert","lines":["community"]}],[{"start":{"row":54,"column":58},"end":{"row":54,"column":62},"action":"remove","lines":["book"],"id":6},{"start":{"row":54,"column":58},"end":{"row":54,"column":67},"action":"insert","lines":["community"]}],[{"start":{"row":61,"column":78},"end":{"row":61,"column":82},"action":"remove","lines":["book"],"id":7},{"start":{"row":61,"column":78},"end":{"row":61,"column":87},"action":"insert","lines":["community"]}],[{"start":{"row":71,"column":57},"end":{"row":71,"column":61},"action":"remove","lines":["book"],"id":8},{"start":{"row":71,"column":57},"end":{"row":71,"column":66},"action":"insert","lines":["community"]}],[{"start":{"row":31,"column":34},"end":{"row":31,"column":39},"action":"remove","lines":["books"],"id":9},{"start":{"row":31,"column":34},"end":{"row":31,"column":45},"action":"insert","lines":["communities"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":4.199999999999998,"selection":{"start":{"row":10,"column":13},"end":{"row":10,"column":13},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":69,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1677382248247,"hash":"482a6b17d02390fad2d6fbf4cbeff5bf21103fcb"}