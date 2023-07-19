import React from "react";
import { FaEllipsisH, FaHeadphones, FaCheck } from "react-icons/fa";
import check from "../Img/check.png";
import banner from "../Img/banner.jpg";
function Banner() {
  return (
    <div className="banner">
      <img src={banner} alt="k-391" className="bannerImg" />
      <div className="content">
        <div className="breadCrump">
          <p>
            Home <span>/Popular Artist</span>
          </p>

          <i>
            <FaEllipsisH />
          </i>
        </div>

        <div className="artist">
          <div className="left">
            <div className="name">
              <h2>K-391</h2>
              <img src={check} alt="" />
            </div>

            <p>
              <i>
                <FaHeadphones />
              </i>
              11,184,811 <span>Monthly Listeners</span>
            </p>
          </div>
          <div className="right">
            <a href="#">Play</a>
            <a href="#">
              <i>
                <FaCheck />
              </i>
              Following
            </a>
          </div>
        </div>
      </div>
      <div className="bottomLayer"></div>
    </div>
  );
}

export { Banner };
