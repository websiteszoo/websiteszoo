import React, { useEffect, useState } from "react";
import Link from "next/link";
import Image from "next/image";
import Sal from "sal.js";
import CtaTwo from "../CallToActions/Cta-Two";

const Home = () => {
  const [visibleIndex, setVisibleIndex] = useState(0);

  useEffect(() => {
    Sal();

    const intervalId = setInterval(() => {
      setVisibleIndex((prevIndex) => (prevIndex + 1) % 3);
    }, 2000);

    return () => {
      clearInterval(intervalId);
    };
  }, []);

  return (
    <>
      <br/><br/><br/><br/>
      <div className="rainbow-cta-area rainbow-section-gap rainbow-section-gapBottom-big">
        <div className="container">
          <CtaTwo />
        </div>
      </div>
    </>
  );
};

export default Home;
