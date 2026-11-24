# Region Nordjylland - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Region Nordjylland**

## Example Organization: Region Nordjylland

Profile: [ehealth-organization](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-organization.html)

Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing)))

-------

| | |
| :--- | :--- |
| Active: | true |
| Type: | region |
| Alias: | Region Nordjylland |
| Contact Detail | * ph: 97648000(Work)
* [region@rn.dk](mailto:region@rn.dk)
* fax: 98152009(Work)
* [https://www.rn.dk](https://www.rn.dk)
* Niels Bohrs Vej 30 Aalborg Øst 9220 DK (work)
* Niels Bohrs Vej 30 Aalborg Øst 9220 DK (work)
 |
| [Municipality Code](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-organization-municipalityCode.html) | 0851 |
| [CVR Number](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-organization-cvrNumber.html) | 29190941 |
| [Organization Source](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-organization-source.html) | Sundhedsvæsenets Organisationsregister |
| [Region code](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-organization-regionCode.html) | 1081 |
| [Organization Synchronization status](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-organization-synchronizationStatus.html) | Eligible for synchronization |



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "org-region-nordjylland",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"]
  },
  "extension" : [{
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-source",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/organization-source",
        "code" : "SOR",
        "display" : "Sundhedsvæsenets Organisationsregister"
      }]
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-synchronizationStatus",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/organization-synchronization-status",
        "code" : "EligibleForSynchronization"
      }]
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-cvrNumber",
    "valueString" : "29190941"
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-regionCode",
    "valueString" : "1081"
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-municipalityCode",
    "valueString" : "0851"
  }],
  "identifier" : [{
    "use" : "official",
    "system" : "urn:oid:1.2.208.176.1.1",
    "value" : "6071000016008",
    "period" : {
      "start" : "2007-08-29T00:00:00+00:00"
    }
  }],
  "active" : true,
  "type" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct/554471000005108/version/20150731",
      "code" : "550881000005103",
      "display" : "region"
    }]
  }],
  "name" : "Region Nordjylland",
  "alias" : ["Region Nordjylland"],
  "telecom" : [{
    "system" : "phone",
    "value" : "97648000",
    "use" : "work"
  },
  {
    "system" : "email",
    "value" : "region@rn.dk",
    "use" : "work"
  },
  {
    "system" : "fax",
    "value" : "98152009",
    "use" : "work"
  },
  {
    "system" : "url",
    "value" : "https://www.rn.dk",
    "use" : "work"
  }],
  "address" : [{
    "use" : "work",
    "type" : "postal",
    "line" : ["Niels Bohrs Vej 30"],
    "city" : "Aalborg Øst",
    "postalCode" : "9220",
    "country" : "DK"
  },
  {
    "use" : "work",
    "type" : "physical",
    "line" : ["Niels Bohrs Vej 30"],
    "city" : "Aalborg Øst",
    "postalCode" : "9220",
    "country" : "DK"
  }]
}

```
