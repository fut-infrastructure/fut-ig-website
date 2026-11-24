# Submission under the open episode - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Submission under the open episode**

## Example Provenance: Submission under the open episode

Profile: [ehealth-provenance](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-provenance.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

Provenance for: 

* [Response to Questionnaire '->KOL spørgeskema' about '->Thomas Bonde (official) Male, DoB: 1963-11-13 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#1311633801 (use: official))'](QuestionnaireResponse-p04-cp2-qr.md)
* [Observation Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?](Observation-p04-cp2-sat.md)
* [Observation Hjerte—Systole; frekv. = ? × 1/min](Observation-p04-cp2-pulse.md)

Summary

| | |
| :--- | :--- |
| Recorded | 2026-09-30 08:30:05+0000 |
| Policy | [http://ehealth.sundhed.dk/policy/ehealth/coherent-submitted-measurement](http://ehealth.sundhed.dk/policy/ehealth/coherent-submitted-measurement) |

**Agents**

* **who**: [Thomas Bonde (official) Male, DoB: 1963-11-13 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#1311633801 (use: official))](Patient-p04.md)

**Entities**

* **Role**: Quotation
  * **What**: [ServiceRequest Master Questionnaire](ServiceRequest-p04-cp2-sr-extra-questionnaire.md)
* **Role**: Quotation
  * **What**: [ServiceRequest Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?](ServiceRequest-p04-cp2-sr-extra-saturation.md)
* **Role**: Quotation
  * **What**: [ServiceRequest Hjerte—Systole; frekv. = ? × 1/min](ServiceRequest-p04-cp2-sr-extra-pulse.md)
* **Role**: Quotation
  * **What**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = active; period = 2026-09-29 09:00:00+0000 --> (ongoing)](EpisodeOfCare-p04-eoc2.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "p04-cp2-prov",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "target" : [{
    "reference" : "QuestionnaireResponse/p04-cp2-qr"
  },
  {
    "reference" : "Observation/p04-cp2-sat"
  },
  {
    "reference" : "Observation/p04-cp2-pulse"
  }],
  "recorded" : "2026-09-30T08:30:05+00:00",
  "policy" : ["http://ehealth.sundhed.dk/policy/ehealth/coherent-submitted-measurement"],
  "agent" : [{
    "who" : {
      "reference" : "Patient/p04"
    }
  }],
  "entity" : [{
    "role" : "quotation",
    "what" : {
      "reference" : "ServiceRequest/p04-cp2-sr-extra-questionnaire"
    }
  },
  {
    "role" : "quotation",
    "what" : {
      "reference" : "ServiceRequest/p04-cp2-sr-extra-saturation"
    }
  },
  {
    "role" : "quotation",
    "what" : {
      "reference" : "ServiceRequest/p04-cp2-sr-extra-pulse"
    }
  },
  {
    "role" : "quotation",
    "what" : {
      "reference" : "EpisodeOfCare/p04-eoc2"
    }
  }]
}

```
