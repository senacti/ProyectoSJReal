import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
// import { environment } from 'src/environments/environment';
import { Params } from '@angular/router';

const URL = 'http://localhost:8000/api';

@Injectable({
  providedIn: 'root', // Esto hace que el servicio esté disponible de forma global
})

export class Services {


    constructor(private http: HttpClient
    ) { }



    /**
     * 
     * USERS
     * 
     */

    get() {

        return this.http.get(`${URL}/register`);

    }

    postRegisterUser(data: any) {
        console.log(data);
        return this.http.post(`${URL}/register`, data);
    }


    getAllCleaningsDatetime() {

        return this.http.get(`${URL}/assignments`);

    }

    getNotAvailableGroupDatetime() {

        const params: Params = {
            // third_party_uuid: "ESTEBAN",
            third_party_uuid: "JULIAN",
            document_version_assignment_uuid: "MATIENOTAVAILABLE",
        };


        return this.http.get(`${URL}/not_available/index_group`, { params: params });
    }

    postFormCleaning(data: any) {
        console.log(data);
        return this.http.post(`${URL}/assignments`, data);
    }


    putFormCleaningNoAvailable(data: any) {

        console.log(data);

        let request = data
        return this.http.post(`${URL}/not_available/put`, request);
    }


}
