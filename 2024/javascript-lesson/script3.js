// ---------------------------------------
// ------関数について（const 定数名=function(){};）----------
// 関数greetを定義
const greet = function() {
    console.log("こんにちは！");
    console.log("関数を学習していきましょう！");
};
  
// 関数を呼び出しコンソールに出力
greet();

// ---------------------------------------
// ------オブジェクトの作成と出力----------
// 定数animalを定義しオブジェクトを代入（オブジェクトは、「プロパティ名＋文字列,数値,関数等の値」）
const animal={
    name:"レオ",
    age:3,
    greet:() => {
        console.log("こんにちは");
    }
};

// 定数animalのnameプロパティの値を出力してください
console.log(animal.name);

// 定数animalのgreetプロパティの関数を呼び出し
animal.greet();