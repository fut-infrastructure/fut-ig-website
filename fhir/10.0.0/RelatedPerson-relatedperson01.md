# relatedperson01 - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **relatedperson01**

## Example RelatedPerson: relatedperson01

version: 1; Last updated: 2021-07-15 07:08:53+0000

Profile: [ehealth-relatedperson](StructureDefinition-ehealth-relatedperson.md)

**Patient contact note**: This is a contact note

**identifier**: [Danish civil registration system - CPR](NamingSystem-cpr.md)/0501792275

**active**: true

**patient**: [Nancy Ann Berggren (official) Unknown, DoB Unknown ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#2512489996 (use: official, ))](Patient-102.md)

**relationship**: power of attorney, urn:dk:sundhed:ehealth:futtest:role:PowerOfAttorney:v1

**name**: RelatedPerson Test (Official)

**address**: Mønsgade 20 5. tv Aarhus 8000 Danmark (home)

**period**: 2026-03-24 --> (ongoing)



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "relatedperson01",
  "meta" : {
    "versionId" : "1",
    "lastUpdated" : "2021-07-15T07:08:53.568+00:00",
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"]
  },
  "extension" : [{
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient-contactnote",
    "valueString" : "This is a contact note"
  }],
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0501792275"
  }],
  "active" : true,
  "patient" : {
    "reference" : "Patient/102"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "POWATT"
    }]
  },
  {
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/poa-privilege",
      "code" : "urn:dk:sundhed:ehealth:futtest:role:PowerOfAttorney:v1"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Test",
    "given" : ["RelatedPerson"]
  }],
  "address" : [{
    "extension" : [{
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes",
          "code" : "0330"
        }]
      }
    }],
    "use" : "home",
    "line" : ["Mønsgade 20 5. tv"],
    "city" : "Aarhus",
    "postalCode" : "8000",
    "country" : "Danmark"
  }],
  "period" : {
    "start" : "2026-03-24"
  }
}

```
