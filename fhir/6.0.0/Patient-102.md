# Patient/102 - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient/102**

## Example Patient: Patient/102

Profile: [ehealth-patient](StructureDefinition-ehealth-patient.md)

Nancy Ann Berggren (official) Ukendt, DoB Unknown ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#2512489996 (use: official, ))

-------

| | |
| :--- | :--- |
| Contact Detail | * NemSMS
* eBoks
* Tårnhøjvej 47 Landet Aalborg Øst 9220 Danmark (home)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "102",
  "meta" : {
    "profile" : [
      "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"
    ]
  },
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:oid:1.2.208.176.1.2",
      "value" : "2512489996"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "family" : "Berggren",
      "given" : ["Nancy", "Ann"]
    }
  ],
  "telecom" : [
    {
      "system" : "other",
      "value" : "NemSMS"
    },
    {
      "system" : "other",
      "value" : "eBoks"
    }
  ],
  "gender" : "unknown",
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
        },
        {
          "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-regional-subdivision-codes",
                "code" : "DK-85"
              }
            ]
          }
        }
      ],
      "use" : "home",
      "line" : ["Tårnhøjvej 47", "Landet"],
      "city" : "Aalborg Øst",
      "postalCode" : "9220",
      "country" : "Danmark"
    }
  ]
}

```
