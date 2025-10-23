# relatedperson01 - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **relatedperson01**

## Example RelatedPerson: relatedperson01

version: 1; Last updated: 2021-07-15 07:08:53+0000

Profile: [ehealth-relatedperson](StructureDefinition-ehealth-relatedperson.md)

**Patient contact note**: This is a contact note

**patient**: [Nancy Ann Berggren (official) Ukendt, DoB Unknown ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#2512489996 (use: official, ))](Patient-102.md)

**name**: RelatedPerson Test (Official)

**address**: Mønsgade 20 5. tv Aarhus 8000 Danmark (home)



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "relatedperson01",
  "meta" : {
    "versionId" : "1",
    "lastUpdated" : "2021-07-15T07:08:53.568+00:00",
    "profile" : [
      "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
    ]
  },
  "extension" : [
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient-contactnote",
      "valueString" : "This is a contact note"
    }
  ],
  "patient" : {
    "reference" : "Patient/102"
  },
  "name" : [
    {
      "use" : "official",
      "family" : "Test",
      "given" : ["RelatedPerson"]
    }
  ],
  "address" : [
    {
      "extension" : [
        {
          "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes",
                "code" : "0330"
              }
            ]
          }
        }
      ],
      "use" : "home",
      "line" : ["Mønsgade 20 5. tv"],
      "city" : "Aarhus",
      "postalCode" : "8000",
      "country" : "Danmark"
    }
  ]
}

```
