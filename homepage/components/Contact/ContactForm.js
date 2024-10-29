import React from "react";

const ContactForm = () => {
  return (
    <>
      <form action="https://script.google.com/macros/s/AKfycbyPugN0aMzClrjLjzxCjHJ8hufrCwytafgrlDZqNr-NiyJaf8TnUPvIZC66_AqZK2iG/exec" method="post" className="rbt-profile-row rbt-default-form row row--15" >
        <div className="col-lg-6 col-md-6 col-sm-6 col-12">
          <div className="form-group">
            <label htmlFor="firstname1">姓名 *</label>
            <input id="firstname1" type="text" placeholder="" name="1000311"/>
          </div>
        </div>
        <div className="col-lg-6 col-md-6 col-sm-6 col-12">
          <div className="form-group">
            <label htmlFor="username1">公司名稱</label>
            <input id="username1" type="text" placeholder="" name="1000312"/>
          </div>
        </div>
        <div className="col-lg-6 col-md-6 col-sm-6 col-12">
          <div className="form-group">
            <label htmlFor="lastname1">E-mail *</label>
            <input id="lastname1" type="text" placeholder="" name="1000313"/>
          </div>
        </div>
        
        <div className="col-lg-6 col-md-6 col-sm-6 col-12">
          <div className="form-group">
            <label htmlFor="phonenumber1">聯絡電話 *</label>
            <input id="phonenumber1" type="tel" placeholder="" name="1000314"/>
          </div>
        </div>
        <div className="col-lg-6 col-md-6 col-sm-6 col-12">
          <div className="form-group">
            <label htmlFor="phonenumber1">服務項目 *</label>
            <div className="form-group">
              <select  aria-label="Default select example" name="1000315">
                <option value="網頁設計" selected>網頁設計</option>
                <option value="數位行銷">數位行銷</option>
                <option value="功能開發">功能開發</option>
                <option value="視覺設計">視覺設計</option>
              </select>
            </div>
          </div>
        </div>
        <div className="col-lg-6 col-md-6 col-sm-6 col-12">
          <div className="form-group">
            <label htmlFor="phonenumber1">從什麼管道得知樂創 *</label>
            <div className="form-group">
              <select  aria-label="Default select example" name="1000316">
                <option value="Google 搜尋" selected>Google 搜尋</option>
                <option value="親友介紹">親友介紹</option>
                <option value="文章推薦">文章推薦</option>
                <option value="其他">其他</option>
              </select>
            </div>
          </div>
        </div>
        <div className="col-lg-12 col-md-12 col-sm-12 col-12">
          <div className="form-group">
            <label htmlFor="phonenumber1">需求內容</label>
            <div className="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="1000317"></textarea>
          </div>
          </div>
        </div>

        
        <div className="col-12 mt--20">
          <div className="form-group mb--0">
          <input iclassName="btn-default" type="submit" placeholder="" name="submit" value="提交表單"/>
          </div>
        </div>
      </form>
    </>
  );
};

export default ContactForm;
