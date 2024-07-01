import Link from "next/link";
import Image from "next/image";
import React from "react";

import TabData from "../../data/tabStyle.json";

const TabStyleOne = () => {
  return (
    <>
      <div className="row row--30 align-items-center">
        <div className="col-lg-12">
          <div className="rainbow-default-tab style-three generator-tab-defalt">
            <ul className="nav nav-tabs tab-button" role="tablist">
              {TabData &&
                TabData.TabStyleOne.map((data, index) => (
                  <li
                    className="nav-item tabs__tab "
                    role="presentation"
                    key={index}
                  >
                    <button
                      className={`nav-link rainbow-gradient-btn without-shape-circle ${
                        data.isSelect ? "active" : ""
                      }`}
                      id={`${data.menuId}-tab`}
                      data-bs-toggle="tab"
                      data-bs-target={`#${data.target}`}
                      type="button"
                      role="tab"
                      aria-controls={data.target}
                      aria-selected="false"
                    >
                      <span className="generator-icon">
                        {data.text}
                      </span>
                      <span className="border-bottom-style"></span>
                    </button>
                  </li>
                ))}
            </ul>

            <div className="rainbow-tab-content tab-content">
              {TabData &&
                TabData.TabStyleOne.map((tab, index) => (
                  <div
                    className={`tab-pane fade ${
                      tab.isSelect ? "show active" : ""
                    }`}
                    id={tab.target}
                    role="tabpanel"
                    aria-labelledby={`${tab.menuId}-tab`}
                    key={index}
                  >
                    <div className="inner">
                      <div className="row">
                        <div className="col-xl-">
                          <div className="section-title">
                            <h2 className="title">{tab.title}</h2>
                            <div className="features-section">
                                <div class="row">
                                {tab.subItem.map((item, i) => (
                                  
                                    <div className="col-lg-4 col-md-6 col-12 mt--30" key={index}>
                                      <div className="rbt-team team-style-default style-three rbt-hover">
                                        <a href= {item.url} target="_blank">
                                            <div className="inner">
                                              <div className="thumbnail">
                                                <Image
                                                  src={item.img}
                                                  width={400}
                                                  height={400}
                                                  alt="Corporate Template"
                                                />
                                              </div>
                                              <div className="content">
                                                <h2 className="title">{item.name}</h2>
                                                <h6 className="subtitle">{item.intr}</h6>
                                              </div>
                                            </div>
                                        </a>  
                                      </div>
                                    </div>
                                  
                                 ))}  
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                ))}
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default TabStyleOne;
