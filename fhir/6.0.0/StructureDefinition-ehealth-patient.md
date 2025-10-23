# ehealth-patient - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-patient**

## Resource Profile: ehealth-patient 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-patient |

# Introduction

An ehealth-patient is a central entity, which is referenced by many other entities in the FUT infrastructure. The ehealth-patient inherits characteristics from [https://hl7.dk/fhir/core/1.1.0/StructureDefinition-dk-core-patient.html](https://hl7.dk/fhir/core/1.1.0/StructureDefinition-dk-core-patient.html).

# Scope and Usage

In the eHealth Infrastructure the Patient resource is primarily used in conjunction with the following resources:

* Communication 
* As sender or recipient of a message
 
* Appointment 
* As participant on an ehealth-appointment
 
* CarePlan 
* As the subject in question
 
* ClinicalImpression 
* As the subject in question
 
* EpisodeOfCare 
* As the focus of an episode of care
 
* Observation 
* As the subject in question
 
* RelatedPerson 
* As the patient who a person is related to
 

# Update rules

Certain data on an ehealth-patient are automatically updated based on the CPR system. This includes official name, address, and of course the CPR number itself.

When adding/updating an address (non-home address), the service will by default "wash" the address using DAWA (Danmarks Adressers Web API).
 See https://dawadocs.dataforsyningen.dk/dok/api/adresse#datavask. 
 A client may overrule the default validation strategy by setting a request header `x-address-validation-strategy` with the value "STRICT", "WASH" or "NONE".
 If "STRICT" is used the request will fail if the address does not match strictly an address in DAWA.
 If "WASH" is used (the default strategy) the client may want to verify that the wash outcome was as expected.
 If "NONE" is used no validation/modification is performed (the address is stored as is).

An ehealth-patient may be PATCH updated on paths complying with the regular expressions below.

| | |
| :--- | :--- |
| /implicitRules.* |   |
| /language.* |   |
| /contained.* |   |
| /identifier.* | CPR number may not be changed, but addition of other identifiers are allowed |
| /name.* | The official name (use=official) may not be changed, as it is automatically synchronized with the CPR system |
| /address.* | The home address may not be changed (use=home), as it is automatically synchronized with the CPR system |
| /maritalStatus.* |   |
| /multipleBirth.* |   |
| /photo.* |   |
| /contact.* |   |
| /telecom.* |   |
| /communication.* |   |
| /link.* |   |
| /itcompetencelevel.* |   |
| /interpreterRequired.* |   |
| /generalHealthCondition.* |   |
| /functionalCapacity.* |   |
| /extension.* |   |

# Name and Address Protection

Patients with name and address protection are marked with security label 'restricted' (R in http://hl7.org/fhir/v3/Confidentiality).

The period of the name and address protection is expressed in an extention with url: http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-nameandaddressprotection"

# Resolving general practitioner

When creating and updating a patient, the infrastructure retrieves information on the patient's general practitioner from the provider registry (Yderregister: https://sundhedsdatastyrelsen.dk/da/registre-og-services/om-de-nationale-sundhedsregistre/personoplysninger-og-sundhedsfaglig-beskaeftigelse/yderregisteret). This is added to the patient resource as a logical reference (http://hl7.org/fhir/R4/references.html#logical) containing the provider identifier (ydernummer).

**Usages:**

* Refer to this Profile: [ehealth-appointment](StructureDefinition-ehealth-appointment.md), [ehealth-careplan](StructureDefinition-ehealth-careplan.md), [ehealth-careteam](StructureDefinition-ehealth-careteam.md), [assessor-other](StructureDefinition-ehealth-clinicalimpression-assessor-other.md)...Show 25 more,[ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md),[ehealth-communication](StructureDefinition-ehealth-communication.md),[ehealth-composition](StructureDefinition-ehealth-composition.md),[ehealth-condition](StructureDefinition-ehealth-condition.md),[ehealth-consent](StructureDefinition-ehealth-consent.md),[Suppliers](StructureDefinition-ehealth-device-suppliers.md),[ehealth-device](StructureDefinition-ehealth-device.md),[ehealth-deviceusestatement](StructureDefinition-ehealth-deviceusestatement.md),[ehealth-documentreference](StructureDefinition-ehealth-documentreference.md),[ehealth-episodeofcare](StructureDefinition-ehealth-episodeofcare.md),[ehealth-goal](StructureDefinition-ehealth-goal.md),[ehealth-group-appointment](StructureDefinition-ehealth-group-appointment.md),[ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md),[ehealth-guidanceresponse](StructureDefinition-ehealth-guidanceresponse.md),[ehealth-media](StructureDefinition-ehealth-media.md),[ehealth-message](StructureDefinition-ehealth-message.md),[ehealth-observation](StructureDefinition-ehealth-observation.md),[ehealth-provenance](StructureDefinition-ehealth-provenance.md),[ehealth-questionnaireresponse](StructureDefinition-ehealth-questionnaireresponse.md),[ehealth-relatedperson](StructureDefinition-ehealth-relatedperson.md),[ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md),[Task responsible](StructureDefinition-ehealth-task-responsible.md),[ehealth-task](StructureDefinition-ehealth-task.md),[ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md)and[ehealth-videoappointment](StructureDefinition-ehealth-videoappointment.md)
* Examples for this Profile: [Patient/102](Patient-102.md)
* CapabilityStatements using this Profile: [patient](CapabilityStatement-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-patient.csv), [Excel](StructureDefinition-ehealth-patient.xlsx), [Schematron](StructureDefinition-ehealth-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-patient",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
  "version" : "6.0.0",
  "name" : "ehealth-patient",
  "status" : "active",
  "date" : "2025-10-23T10:25:37+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient"
      },
      {
        "id" : "Patient.extension",
        "path" : "Patient.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Patient.extension:itCompetenceLevel",
        "path" : "Patient.extension",
        "sliceName" : "itCompetenceLevel",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-itcompetencelevel"
            ]
          }
        ]
      },
      {
        "id" : "Patient.extension:interpreterRequired",
        "path" : "Patient.extension",
        "sliceName" : "interpreterRequired",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/patient-interpreterRequired"
            ]
          }
        ]
      },
      {
        "id" : "Patient.extension:generalHealthCondition",
        "path" : "Patient.extension",
        "sliceName" : "generalHealthCondition",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-general-health-condition"
            ]
          }
        ]
      },
      {
        "id" : "Patient.extension:nameAndAddressProtection",
        "path" : "Patient.extension",
        "sliceName" : "nameAndAddressProtection",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-nameandaddressprotection"
            ]
          }
        ]
      },
      {
        "id" : "Patient.identifier:cpr",
        "path" : "Patient.identifier",
        "sliceName" : "cpr",
        "min" : 1
      },
      {
        "id" : "Patient.telecom",
        "path" : "Patient.telecom",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "value"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Patient.telecom:NemSMS",
        "path" : "Patient.telecom",
        "sliceName" : "NemSMS",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Patient.telecom:NemSMS.system",
        "path" : "Patient.telecom.system",
        "min" : 1,
        "patternCode" : "other"
      },
      {
        "id" : "Patient.telecom:NemSMS.value",
        "path" : "Patient.telecom.value",
        "min" : 1,
        "fixedString" : "NemSMS"
      },
      {
        "id" : "Patient.telecom:NemSMS.use",
        "path" : "Patient.telecom.use",
        "max" : "0"
      },
      {
        "id" : "Patient.telecom:NemSMS.rank",
        "path" : "Patient.telecom.rank",
        "max" : "0"
      },
      {
        "id" : "Patient.telecom:eBoks",
        "path" : "Patient.telecom",
        "sliceName" : "eBoks",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Patient.telecom:eBoks.system",
        "path" : "Patient.telecom.system",
        "min" : 1,
        "patternCode" : "other"
      },
      {
        "id" : "Patient.telecom:eBoks.value",
        "path" : "Patient.telecom.value",
        "min" : 1,
        "fixedString" : "eBoks"
      },
      {
        "id" : "Patient.telecom:eBoks.use",
        "path" : "Patient.telecom.use",
        "max" : "0"
      },
      {
        "id" : "Patient.telecom:eBoks.rank",
        "path" : "Patient.telecom.rank",
        "max" : "0"
      },
      {
        "id" : "Patient.gender",
        "path" : "Patient.gender",
        "min" : 1
      },
      {
        "id" : "Patient.address",
        "path" : "Patient.address",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "use"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Patient.address:officialHomeAddress",
        "path" : "Patient.address",
        "sliceName" : "officialHomeAddress",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Patient.address:officialHomeAddress.extension:municipalityCode",
        "path" : "Patient.address.extension",
        "sliceName" : "municipalityCode"
      },
      {
        "id" : "Patient.address:officialHomeAddress.extension:regionalSubDivisionCodes",
        "path" : "Patient.address.extension",
        "sliceName" : "regionalSubDivisionCodes"
      },
      {
        "id" : "Patient.address:officialHomeAddress.use",
        "path" : "Patient.address.use",
        "min" : 1,
        "fixedCode" : "home"
      },
      {
        "id" : "Patient.contact.extension",
        "path" : "Patient.contact.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Patient.contact.extension:patientContactnote",
        "path" : "Patient.contact.extension",
        "sliceName" : "patientContactnote",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient-contactnote"
            ]
          }
        ]
      },
      {
        "id" : "Patient.contact.address.extension:municipalityCodes",
        "path" : "Patient.contact.address.extension",
        "sliceName" : "municipalityCodes",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes"
            ]
          }
        ]
      },
      {
        "id" : "Patient.contact.address.extension:regionalSubDivisionCodes",
        "path" : "Patient.contact.address.extension",
        "sliceName" : "regionalSubDivisionCodes",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes"
            ]
          }
        ]
      },
      {
        "id" : "Patient.communication.language.coding.system",
        "path" : "Patient.communication.language.coding.system",
        "fixedUri" : "urn:ietf:bcp:47"
      },
      {
        "id" : "Patient.generalPractitioner",
        "path" : "Patient.generalPractitioner",
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Organization"],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Patient.generalPractitioner:referencedSORUnit",
        "path" : "Patient.generalPractitioner",
        "sliceName" : "referencedSORUnit",
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Organization"]
          }
        ]
      },
      {
        "id" : "Patient.generalPractitioner:YderNummer",
        "path" : "Patient.generalPractitioner",
        "sliceName" : "YderNummer",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Patient.generalPractitioner:YderNummer.identifier",
        "path" : "Patient.generalPractitioner.identifier",
        "min" : 1
      },
      {
        "id" : "Patient.generalPractitioner:YderNummer.identifier.system",
        "path" : "Patient.generalPractitioner.identifier.system",
        "min" : 1,
        "patternUri" : "urn:oid.1.2.208.176.1.4"
      },
      {
        "id" : "Patient.generalPractitioner:YderNummer.identifier.value",
        "path" : "Patient.generalPractitioner.identifier.value",
        "min" : 1
      }
    ]
  }
}

```
