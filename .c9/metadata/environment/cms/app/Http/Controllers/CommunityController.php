{"filter":false,"title":"CommunityController.php","tooltip":"/cms/app/Http/Controllers/CommunityController.php","undoManager":{"mark":76,"position":76,"stack":[[{"start":{"row":16,"column":8},"end":{"row":16,"column":34},"action":"insert","lines":["return view('books'); //追記"],"id":8}],[{"start":{"row":16,"column":21},"end":{"row":16,"column":26},"action":"remove","lines":["books"],"id":9}],[{"start":{"row":16,"column":21},"end":{"row":16,"column":32},"action":"insert","lines":["communities"],"id":10}],[{"start":{"row":5,"column":28},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":11}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":27},"action":"insert","lines":["use Validator;  //この1行だけ追加！"],"id":12}],[{"start":{"row":38,"column":8},"end":{"row":38,"column":10},"action":"remove","lines":["//"],"id":13},{"start":{"row":38,"column":8},"end":{"row":62,"column":2},"action":"insert","lines":["//バリデーション","    $validator = Validator::make($request->all(), [","         'item_name' => 'required|min:3|max:255',","         'item_number' => 'required|min:1|max:3',","         'item_amount' => 'required|max:6',","         'published'   => 'required',","    ]);","","    //バリデーション:エラー ","    if ($validator->fails()) {","        return redirect('/')","            ->withInput()","            ->withErrors($validator);","    }","","    //以下に登録処理を記述（Eloquentモデル）","\t  // Eloquentモデル","\t  $books = new Book;","\t  $books->item_name   = $request->item_name;","\t  $books->item_number = $request->item_number;","\t  $books->item_amount = $request->item_amount;","\t  $books->published   = $request->published;","\t  $books->save(); ","\t  return redirect('/');","  "]}],[{"start":{"row":55,"column":4},"end":{"row":55,"column":9},"action":"remove","lines":["books"],"id":14}],[{"start":{"row":56,"column":4},"end":{"row":56,"column":9},"action":"remove","lines":["books"],"id":15}],[{"start":{"row":57,"column":8},"end":{"row":57,"column":9},"action":"remove","lines":["s"],"id":16},{"start":{"row":57,"column":7},"end":{"row":57,"column":8},"action":"remove","lines":["k"]},{"start":{"row":57,"column":6},"end":{"row":57,"column":7},"action":"remove","lines":["o"]},{"start":{"row":57,"column":5},"end":{"row":57,"column":6},"action":"remove","lines":["o"]},{"start":{"row":57,"column":4},"end":{"row":57,"column":5},"action":"remove","lines":["b"]}],[{"start":{"row":58,"column":8},"end":{"row":58,"column":9},"action":"remove","lines":["s"],"id":17},{"start":{"row":58,"column":7},"end":{"row":58,"column":8},"action":"remove","lines":["k"]},{"start":{"row":58,"column":6},"end":{"row":58,"column":7},"action":"remove","lines":["o"]},{"start":{"row":58,"column":5},"end":{"row":58,"column":6},"action":"remove","lines":["o"]},{"start":{"row":58,"column":4},"end":{"row":58,"column":5},"action":"remove","lines":["b"]}],[{"start":{"row":59,"column":8},"end":{"row":59,"column":9},"action":"remove","lines":["s"],"id":18},{"start":{"row":59,"column":7},"end":{"row":59,"column":8},"action":"remove","lines":["k"]},{"start":{"row":59,"column":6},"end":{"row":59,"column":7},"action":"remove","lines":["o"]},{"start":{"row":59,"column":5},"end":{"row":59,"column":6},"action":"remove","lines":["o"]},{"start":{"row":59,"column":4},"end":{"row":59,"column":5},"action":"remove","lines":["b"]}],[{"start":{"row":60,"column":8},"end":{"row":60,"column":9},"action":"remove","lines":["s"],"id":19},{"start":{"row":60,"column":7},"end":{"row":60,"column":8},"action":"remove","lines":["k"]},{"start":{"row":60,"column":6},"end":{"row":60,"column":7},"action":"remove","lines":["o"]},{"start":{"row":60,"column":5},"end":{"row":60,"column":6},"action":"remove","lines":["o"]},{"start":{"row":60,"column":4},"end":{"row":60,"column":5},"action":"remove","lines":["b"]}],[{"start":{"row":55,"column":4},"end":{"row":55,"column":15},"action":"insert","lines":["communities"],"id":20}],[{"start":{"row":56,"column":4},"end":{"row":56,"column":15},"action":"insert","lines":["communities"],"id":21}],[{"start":{"row":57,"column":4},"end":{"row":57,"column":15},"action":"insert","lines":["communities"],"id":22}],[{"start":{"row":58,"column":4},"end":{"row":58,"column":15},"action":"insert","lines":["communities"],"id":23}],[{"start":{"row":59,"column":4},"end":{"row":59,"column":15},"action":"insert","lines":["communities"],"id":24}],[{"start":{"row":60,"column":4},"end":{"row":60,"column":15},"action":"insert","lines":["communities"],"id":25}],[{"start":{"row":55,"column":25},"end":{"row":55,"column":26},"action":"remove","lines":["k"],"id":26},{"start":{"row":55,"column":24},"end":{"row":55,"column":25},"action":"remove","lines":["o"]},{"start":{"row":55,"column":23},"end":{"row":55,"column":24},"action":"remove","lines":["o"]},{"start":{"row":55,"column":22},"end":{"row":55,"column":23},"action":"remove","lines":["B"]}],[{"start":{"row":55,"column":22},"end":{"row":55,"column":31},"action":"insert","lines":["community"],"id":27}],[{"start":{"row":55,"column":22},"end":{"row":55,"column":23},"action":"remove","lines":["c"],"id":28}],[{"start":{"row":55,"column":22},"end":{"row":55,"column":23},"action":"insert","lines":["C"],"id":29}],[{"start":{"row":17,"column":6},"end":{"row":17,"column":42},"action":"remove","lines":["  return view('communities'); //追記//"],"id":30},{"start":{"row":17,"column":6},"end":{"row":20,"column":46},"action":"insert","lines":["//本の全件データ取得","    $books = Book::orderBy('created_at', 'asc')->get();","","    return view('books', ['books' => $books]);"]}],[{"start":{"row":18,"column":16},"end":{"row":18,"column":17},"action":"remove","lines":["k"],"id":31},{"start":{"row":18,"column":15},"end":{"row":18,"column":16},"action":"remove","lines":["o"]},{"start":{"row":18,"column":14},"end":{"row":18,"column":15},"action":"remove","lines":["o"]},{"start":{"row":18,"column":13},"end":{"row":18,"column":14},"action":"remove","lines":["B"]}],[{"start":{"row":18,"column":13},"end":{"row":18,"column":22},"action":"insert","lines":["Commnutiy"],"id":32}],[{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"remove","lines":["i"],"id":33}],[{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"insert","lines":["i"],"id":34}],[{"start":{"row":20,"column":17},"end":{"row":20,"column":22},"action":"remove","lines":["books"],"id":35},{"start":{"row":20,"column":17},"end":{"row":20,"column":28},"action":"insert","lines":["communities"]}],[{"start":{"row":20,"column":33},"end":{"row":20,"column":38},"action":"remove","lines":["books"],"id":36},{"start":{"row":20,"column":33},"end":{"row":20,"column":44},"action":"insert","lines":["communities"]}],[{"start":{"row":20,"column":50},"end":{"row":20,"column":55},"action":"remove","lines":["books"],"id":37},{"start":{"row":20,"column":50},"end":{"row":20,"column":61},"action":"insert","lines":["communities"]}],[{"start":{"row":110,"column":8},"end":{"row":110,"column":10},"action":"remove","lines":["//"],"id":38},{"start":{"row":110,"column":8},"end":{"row":112,"column":4},"action":"insert","lines":["  $book->delete();       //追加","    return redirect('/');  //追加","    "]}],[{"start":{"row":111,"column":4},"end":{"row":111,"column":5},"action":"insert","lines":[" "],"id":39},{"start":{"row":111,"column":5},"end":{"row":111,"column":6},"action":"insert","lines":[" "]},{"start":{"row":111,"column":6},"end":{"row":111,"column":7},"action":"insert","lines":[" "]},{"start":{"row":111,"column":7},"end":{"row":111,"column":8},"action":"insert","lines":[" "]},{"start":{"row":111,"column":8},"end":{"row":111,"column":9},"action":"insert","lines":[" "]},{"start":{"row":111,"column":9},"end":{"row":111,"column":10},"action":"insert","lines":[" "]}],[{"start":{"row":110,"column":11},"end":{"row":110,"column":15},"action":"remove","lines":["book"],"id":40},{"start":{"row":110,"column":11},"end":{"row":110,"column":20},"action":"insert","lines":["community"]}],[{"start":{"row":87,"column":8},"end":{"row":87,"column":10},"action":"remove","lines":["//"],"id":41},{"start":{"row":87,"column":8},"end":{"row":88,"column":52},"action":"insert","lines":["//{books}id 値を取得 => Book $books id 値の1レコード取得","        return view('booksedit', ['book' => $book]);"]}],[{"start":{"row":88,"column":21},"end":{"row":88,"column":26},"action":"remove","lines":["books"],"id":42},{"start":{"row":88,"column":21},"end":{"row":88,"column":33},"action":"insert","lines":["$communities"]}],[{"start":{"row":88,"column":42},"end":{"row":88,"column":46},"action":"remove","lines":["book"],"id":43},{"start":{"row":88,"column":42},"end":{"row":88,"column":51},"action":"insert","lines":["community"]}],[{"start":{"row":88,"column":57},"end":{"row":88,"column":61},"action":"remove","lines":["book"],"id":44},{"start":{"row":88,"column":57},"end":{"row":88,"column":66},"action":"insert","lines":["community"]}],[{"start":{"row":100,"column":8},"end":{"row":100,"column":10},"action":"remove","lines":["//"],"id":45},{"start":{"row":100,"column":8},"end":{"row":122,"column":29},"action":"insert","lines":["     //バリデーション","         $validator = Validator::make($request->all(), [","             'id' => 'required',","             'item_name' => 'required|min:3|max:255',","             'item_number' => 'required|min:1|max:3',","             'item_amount' => 'required|max:6',","             'published' => 'required',","        ]);","        //バリデーション:エラー","         if ($validator->fails()) {","             return redirect('/booksedit/'.$request->id)","                 ->withInput()","                 ->withErrors($validator);","        }","        ","        //データ更新","        $books = Book::find($request->id);","        $books->item_name   = $request->item_name;","        $books->item_number = $request->item_number;","        $books->item_amount = $request->item_amount;","        $books->published   = $request->published;","        $books->save();","        return redirect('/');"]}],[{"start":{"row":110,"column":31},"end":{"row":110,"column":36},"action":"remove","lines":["books"],"id":46},{"start":{"row":110,"column":31},"end":{"row":110,"column":42},"action":"insert","lines":["communities"]}],[{"start":{"row":116,"column":9},"end":{"row":116,"column":14},"action":"remove","lines":["books"],"id":47},{"start":{"row":116,"column":9},"end":{"row":116,"column":20},"action":"insert","lines":["communities"]}],[{"start":{"row":117,"column":9},"end":{"row":117,"column":14},"action":"remove","lines":["books"],"id":48},{"start":{"row":117,"column":9},"end":{"row":117,"column":20},"action":"insert","lines":["communities"]}],[{"start":{"row":118,"column":9},"end":{"row":118,"column":14},"action":"remove","lines":["books"],"id":49},{"start":{"row":118,"column":9},"end":{"row":118,"column":20},"action":"insert","lines":["communities"]}],[{"start":{"row":119,"column":9},"end":{"row":119,"column":14},"action":"remove","lines":["books"],"id":50},{"start":{"row":119,"column":9},"end":{"row":119,"column":20},"action":"insert","lines":["communities"]}],[{"start":{"row":120,"column":9},"end":{"row":120,"column":14},"action":"remove","lines":["books"],"id":51},{"start":{"row":120,"column":9},"end":{"row":120,"column":20},"action":"insert","lines":["communities"]}],[{"start":{"row":121,"column":9},"end":{"row":121,"column":14},"action":"remove","lines":["books"],"id":52},{"start":{"row":121,"column":9},"end":{"row":121,"column":20},"action":"insert","lines":["communities"]}],[{"start":{"row":20,"column":64},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":53},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":17,"column":4},"end":{"row":20,"column":64},"action":"remove","lines":["  //本の全件データ取得","    $books = Commniuty::orderBy('created_at', 'asc')->get();","","    return view('communities', ['communities' => $communities]);"],"id":54},{"start":{"row":17,"column":4},"end":{"row":20,"column":11},"action":"insert","lines":[" $books = Book::orderBy('created_at', 'asc')->paginate(3);","        return view('books', [","            'books' => $books","        ]);"]}],[{"start":{"row":17,"column":6},"end":{"row":17,"column":11},"action":"remove","lines":["books"],"id":55},{"start":{"row":17,"column":6},"end":{"row":17,"column":17},"action":"insert","lines":["communities"]}],[{"start":{"row":18,"column":21},"end":{"row":18,"column":26},"action":"remove","lines":["books"],"id":56},{"start":{"row":18,"column":21},"end":{"row":18,"column":32},"action":"insert","lines":["communities"]}],[{"start":{"row":19,"column":13},"end":{"row":19,"column":18},"action":"remove","lines":["books"],"id":57},{"start":{"row":19,"column":13},"end":{"row":19,"column":24},"action":"insert","lines":["communities"]}],[{"start":{"row":19,"column":30},"end":{"row":19,"column":35},"action":"remove","lines":["books"],"id":58},{"start":{"row":19,"column":30},"end":{"row":19,"column":41},"action":"insert","lines":["communities"]}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":24},"action":"remove","lines":["Book"],"id":61},{"start":{"row":17,"column":20},"end":{"row":17,"column":29},"action":"insert","lines":["community"]}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"remove","lines":["c"],"id":63}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["C"],"id":64}],[{"start":{"row":89,"column":21},"end":{"row":89,"column":22},"action":"remove","lines":["$"],"id":65}],[{"start":{"row":117,"column":26},"end":{"row":117,"column":27},"action":"remove","lines":["k"],"id":66},{"start":{"row":117,"column":25},"end":{"row":117,"column":26},"action":"remove","lines":["o"]},{"start":{"row":117,"column":24},"end":{"row":117,"column":25},"action":"remove","lines":["o"]},{"start":{"row":117,"column":23},"end":{"row":117,"column":24},"action":"remove","lines":["B"]}],[{"start":{"row":117,"column":23},"end":{"row":117,"column":32},"action":"insert","lines":["community"],"id":68}],[{"start":{"row":117,"column":23},"end":{"row":117,"column":24},"action":"remove","lines":["c"],"id":69}],[{"start":{"row":117,"column":23},"end":{"row":117,"column":24},"action":"insert","lines":["C"],"id":70}],[{"start":{"row":123,"column":29},"end":{"row":123,"column":30},"action":"insert","lines":["　"],"id":71}],[{"start":{"row":67,"column":4},"end":{"row":67,"column":5},"action":"remove","lines":["}"],"id":82}],[{"start":{"row":67,"column":4},"end":{"row":67,"column":5},"action":"insert","lines":["}"],"id":83}],[{"start":{"row":123,"column":29},"end":{"row":123,"column":30},"action":"remove","lines":["　"],"id":85}],[{"start":{"row":123,"column":29},"end":{"row":124,"column":0},"action":"insert","lines":["",""],"id":86},{"start":{"row":124,"column":0},"end":{"row":124,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":17,"column":70},"end":{"row":17,"column":71},"action":"remove","lines":["3"],"id":87}],[{"start":{"row":17,"column":68},"end":{"row":17,"column":69},"action":"remove","lines":["e"],"id":88},{"start":{"row":17,"column":67},"end":{"row":17,"column":68},"action":"remove","lines":["t"]},{"start":{"row":17,"column":66},"end":{"row":17,"column":67},"action":"remove","lines":["a"]},{"start":{"row":17,"column":65},"end":{"row":17,"column":66},"action":"remove","lines":["n"]},{"start":{"row":17,"column":64},"end":{"row":17,"column":65},"action":"remove","lines":["i"]},{"start":{"row":17,"column":63},"end":{"row":17,"column":64},"action":"remove","lines":["g"]},{"start":{"row":17,"column":62},"end":{"row":17,"column":63},"action":"remove","lines":["a"]},{"start":{"row":17,"column":61},"end":{"row":17,"column":62},"action":"remove","lines":["p"]}],[{"start":{"row":17,"column":61},"end":{"row":17,"column":62},"action":"insert","lines":["g"],"id":89},{"start":{"row":17,"column":62},"end":{"row":17,"column":63},"action":"insert","lines":["e"]},{"start":{"row":17,"column":63},"end":{"row":17,"column":64},"action":"insert","lines":["t"]}],[{"start":{"row":17,"column":31},"end":{"row":17,"column":60},"action":"insert","lines":["where('user_id',Auth::id())->"],"id":90}],[{"start":{"row":59,"column":32},"end":{"row":60,"column":0},"action":"insert","lines":["",""],"id":91},{"start":{"row":60,"column":0},"end":{"row":60,"column":3},"action":"insert","lines":["\t  "]}],[{"start":{"row":60,"column":3},"end":{"row":60,"column":39},"action":"insert","lines":["$books->user_id = Auth::id();//ここを追加"],"id":92}],[{"start":{"row":60,"column":4},"end":{"row":60,"column":9},"action":"remove","lines":["books"],"id":93},{"start":{"row":60,"column":4},"end":{"row":60,"column":15},"action":"insert","lines":["communities"]}],[{"start":{"row":118,"column":34},"end":{"row":118,"column":61},"action":"insert","lines":["where('user_id',Auth::id())"],"id":94}],[{"start":{"row":118,"column":61},"end":{"row":118,"column":63},"action":"insert","lines":["->"],"id":95}],[{"start":{"row":6,"column":27},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":96}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":19},"action":"insert","lines":["use Auth; //これが新規追加"],"id":97}],[{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"insert","lines":["c"],"id":98},{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"insert","lines":["d"]}],[{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"remove","lines":["d"],"id":99},{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"remove","lines":["c"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":7,"column":19},"end":{"row":7,"column":19},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1677676769586,"hash":"6554d715072fdaaeb5503ddc9bdd6b336f67a8d4"}