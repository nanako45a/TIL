// Reactをインポート
import React from 'react';

// Appクラスを定義
class App extends React.Component {

  // Appクラスのrenderメソッドを定義
  render() {
    // 定数nameを定義
    const name = 'にんじゃわんこ';
    
    // 定数imgUrlを定義
    const imgUrl = 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/ninjawanko.png';

    return (
      <div>
        {/* <h1>タグを用いて、「Hello World」と表示 */}
        <h1>Hello World</h1>

        {/* <p>タグを用いて、「一緒にReactを学びましょう」と表示 */}
        <p>一緒にReactを学びましょう</p>

        {/* <img>タグを用いて、画像を表示 */}
        <img src='画像URL'/>

         {/* 定数nameを用いてにんじゃわんこと表示 */}
        <h1>{name}</h1>

        {/* 定数imgUrlを用いて画像を表示 */}
        <img src={imgUrl} />

        <h1>こんにちは、にんじゃわんこさん</h1>

    	{/* <button>タグ「ひつじ仙人」 */}
    	<button>ひつじ仙人</button>
    	  
    	{/* <button>タグ「にんじゃわんこ」 */}
    	<button>にんじゃわんこ</button>
      </div>
    );
  }
}

// Appクラスをエクスポート
export default App;

// jsのコメント
{/* JSXのコメント */}
