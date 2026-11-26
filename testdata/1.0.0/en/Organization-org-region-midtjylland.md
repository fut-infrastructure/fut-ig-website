# Region Midtjylland - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Region Midtjylland**

## Example Organization: Region Midtjylland

Profile: [ehealth-organization](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-organization.html)

Region Midtjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6081000016005 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing)))

-------

| | |
| :--- | :--- |
| Active: | true |
| Type: | region |
| Alias: | Region Midtjylland |
| Contact Detail | * ph: 87285000(Work)
* [kontakt@regionmidtjylland.dk](mailto:kontakt@regionmidtjylland.dk)
* fax: 87285900(Work)
* [https://www.regionmidtjylland.dk](https://www.regionmidtjylland.dk)
* Skottenborg 26 Viborg 8800 DK (work)
* Skottenborg 26 Viborg 8800 DK (work)
 |
| [Municipality Code](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-organization-municipalityCode.html) | 0791 |
| [CVR Number](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-organization-cvrNumber.html) | 29190925 |
| [Organization Source](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-organization-source.html) | Sundhedsvæsenets Organisationsregister |
| [Region code](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-organization-regionCode.html) | 1082 |
| [Organization Synchronization status](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-organization-synchronizationStatus.html) | Eligible for synchronization |



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "org-region-midtjylland",
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
    "valueString" : "29190925"
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-regionCode",
    "valueString" : "1082"
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-municipalityCode",
    "valueString" : "0791"
  }],
  "identifier" : [{
    "use" : "official",
    "system" : "urn:oid:1.2.208.176.1.1",
    "value" : "6081000016005",
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
  "name" : "Region Midtjylland",
  "alias" : ["Region Midtjylland"],
  "telecom" : [{
    "system" : "phone",
    "value" : "87285000",
    "use" : "work"
  },
  {
    "system" : "email",
    "value" : "kontakt@regionmidtjylland.dk",
    "use" : "work"
  },
  {
    "system" : "fax",
    "value" : "87285900",
    "use" : "work"
  },
  {
    "system" : "url",
    "value" : "https://www.regionmidtjylland.dk",
    "use" : "work"
  }],
  "address" : [{
    "use" : "work",
    "type" : "postal",
    "line" : ["Skottenborg 26"],
    "city" : "Viborg",
    "postalCode" : "8800",
    "country" : "DK"
  },
  {
    "use" : "work",
    "type" : "physical",
    "line" : ["Skottenborg 26"],
    "city" : "Viborg",
    "postalCode" : "8800",
    "country" : "DK"
  }]
}

```
