
import { Country } from "@/types";

export const SERVER_URL = "https://phpstack-1255990-4653753.cloudwaysapps.com";

/**
 * 
 * @param src Country
 * @output chinese-yuan-renminbi-cny-page
 */
export const genCurrencyLink = (src: Country): string => {
  let out = "";
  if (src.call != "" && src.call != " ") out += src.call + "-";
  out += src.currency_name.replace(' ', '-') + '-' + src.currency_code + '-page.html';
  return "/currencies/pairs/" + out.replace(' ', '-').toLowerCase();
}

/**
 * @param src Country
 * @param dest Country
 * @param value Amount of currency
 * @output 1-romanian-leu-ron-to-bangladeshi-taka-bdt
 */
export const genConvertLink = (src: Country, dest: Country, value: number | string = 1): string => {
  let out = `${value}-`;
  if (src.call != "" && src.call != " ") {
    out += src.call + "-";
  }
  out += src.currency_name.replace(' ', '-') + '-' + src.currency_code + '-to-';
  if (dest.call !== "") {
    out += dest.call + "-";
  }
  out += dest.currency_name.replace(' ', '-') + '-' + dest.currency_code;
  return "/currencies/pairs/" + out.replace(' ', '-').toLowerCase() + ".html";
}

/**
 * @param country Country
 * @output indonesian-rupiah-idr-calculator
 */
export const genCalculatorLink = (country: Country, amount: number = 0): string => {
  let out = "";
  if(amount > 0) out += amount + '-';
  if (country.call != "" && country.call != " ") out += country.call + "-";
  out += country.currency_name.replace(' ', '-');
  out += '-' + country.currency_code;
  out += '-calculator';
  return "/currencies/pairs/" + out.replace(' ', '-').toLowerCase() + ".html";
}

export const genFlagUrl = (code: string): string => {
  if(code == "WW") return `https://cryptologos.cc/logos/bitcoin-btc-logo.png?v=032`;
  return `https://flagcdn.com/32x24/${code.toLowerCase()}.png`;
};

export const genCurrencyFullName = (country: Country): string => {
  return `${country.call} ${country.currency_name} ${country.currency_code}`;
}

export const disSingleValue = (value: number): string => {
  return `${new Intl.NumberFormat().format(value)}`;
}

export const disValue = (src: Country, dest: Country, amount: number = 1, show: boolean = false): string => {
  let divider = 1e5;
  if(dest.country_code == "WW") divider = 1e7;
  let value = Math.round(amount * dest.latest_currency.balance * divider / src.latest_currency.balance) / divider;
  if(src.country_code == "WW") {
    value = Math.round(value);
    return `${new Intl.NumberFormat().format(value)}`;
  }
  if(dest.country_code == "WW") return `${value}`;
  if(!show) return `${new Intl.NumberFormat().format(value)}`;
  if(dest.currency_sign == '$') return `$${new Intl.NumberFormat().format(value)}`;
  return `${new Intl.NumberFormat().format(value)}${dest.currency_sign}`;
}