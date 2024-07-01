import React from "react";
import Link from "next/link";
import Image from "next/image";

import ContactForm from "./ContactForm";
import p01 from "../../public/images/contact/01.png";

const Contact = () => {
  return (
    <>
     <div className="breadcrumb-area breadcarumb-style-1 pt--90 pb--20">
        <div className="container">
          <div className="row">
            <div className="col-lg-12">
              <div className="breadcrumb-inner text-center">
              <Image
                    src={p01}
                    alt="Icon Shape"
                    className="iconshape iconshape-three"
                  />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="main-content">
        <div className="rainbow-contact-area rainbow-section">
          <div className="container">
            <div className="row mt--40 row--15">
              <div className="col-lg-8">
                <div className="contact-details-box">
                  <h3 className="title">聯絡樂創</h3>

                  <div className="profile-details-tab">
                    <div className="tab-content">
                      <div
                        className="tab-pane fade active show"
                        id="image-genarator"
                        role="tabpanel"
                        aria-labelledby="image-genarator-tab"
                      >
                        <ContactForm />
                      </div>
                      <div
                        className="tab-pane fade"
                        id="photo-editor"
                        role="tabpanel"
                        aria-labelledby="photo-editor-tab"
                      >
                        <ContactForm />
                      </div>
                      <div
                        className="tab-pane fade"
                        id="email-genarator"
                        role="tabpanel"
                        aria-labelledby="email-genarator-tab"
                      >
                        <ContactForm />
                      </div>
                      <div
                        className="tab-pane fade"
                        id="code-genarator"
                        role="tabpanel"
                        aria-labelledby="code-genarator-tab"
                      >
                        <ContactForm />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-lg-4 mt_md--30 mt_sm--30">
                <div className="rainbow-address">
                  <div className="icon">
                    <i className="fa-sharp fa-regular fa-location-dot"></i>
                  </div>
                  <div className="inner">
                    <h4 className="title">公司地址</h4>
                    <p className="b2">
                    40255台中市南區南平路39-3號
                    </p>
                  </div>
                </div>
                <div className="rainbow-address">
                  <div className="icon">
                    <i className="fa-sharp fa-solid fa-headphones"></i>
                  </div>
                  <div className="inner">
                    <h4 className="title">聯絡電話</h4>
                    <p className="b2">
                      <Link href="tel:04-2265-8002">04-2265-8002</Link>
                    </p>
                  </div>
                </div>
                <div className="rainbow-address">
                  <div className="icon">
                    <i className="fa-sharp fa-regular fa-envelope"></i>
                  </div>
                  <div className="inner">
                    <h4 className="title">公司信箱</h4>
                    <p className="b2">
                      <Link href="mailto:support@websiteszoo.com">support@websiteszoo.com</Link>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default Contact;
