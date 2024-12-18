import axios from "axios";
import { IProduct } from "../interfaces/product-interface";
import { Response } from "../interfaces/response-interface";

const getProducts = async (): Promise<Response<IProduct[]>> => {
  try {
    const url = import.meta.env.VITE_API_URL + "/get-products";
    console.log(url);
    const response = await axios.get(url);
    console.log(response.data);
    return response.data;
  } catch (error) {
    throw new Error((error as Error).message);
  }
};

export { getProducts };
