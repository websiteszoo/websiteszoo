import React, { useEffect, useState } from "react";
import Link from "next/link";
import Image from "next/image";
import Sal from "sal.js";
import styled from 'styled-components';
import TabData from "../../data/servicemenu.json";
import p1 from '../../public/images/service/002.png';
import p2 from '../../public/images/service/001.png';

const rowstyle = {
  paddingLeft: "30px",
  paddingRight: "30px",
  '@media (max-width: 760px)': {
    paddingLeft: "10px",
    paddingRight: "10px",
  },
};

const mrowstyle = {
  '@media (max-width: 760px)': {
    paddingLeft: "10px",
    paddingRight: "10px",
  },
};

const colstyle = {
  textAlign:"center",
  marginTop:"30px",
  '@media (max-width: 760px)': {
    marginTop:"30px"
  },
};
const Home = () => {
  return (
    <>
      {/* Adjusted spacing, assuming these are for styling purposes */}
      <br/><br/><br/><br/>
      {/* Wrapper div with className */}
      <div className="rainbow-cta-area rainbow-section-gap rainbow-section-gapBottom-big">
      <div className="row rowstyle" style={rowstyle} >
        <div className="col-sm-6" style={colstyle}>
          <a href="https://booking.linee.io/" target="_blank">
          <Image
              src={p1}
            />
         </a>   
        </div>
        <div className="col-sm-6" style={colstyle}>
        <a href="https://leweb.io/" target="_blank">
        <Image
              src={p2}
            />
        </a>    
        </div>
      </div>
      </div>
    </>
  );
};

export default Home; // Exporting the component
