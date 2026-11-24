# Pulse (extra) - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pulse (extra)**

## Example ServiceRequest: Pulse (extra)

Profile: [ehealth-servicerequest](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-servicerequest.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**Episode of care**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = active; period = 2026-09-29 09:00:00+0000 --> (ongoing)](EpisodeOfCare-p06-eoc2.md)

**Sharing policy**: Sharing is allowed destination national health data

**includeAsExtra**: true

**triggerEnablementCode**: NO_TRIGGER

> **ServiceRequest status history**
* status: Active
* period: 2026-09-29 09:05:00+0000 --> (ongoing)

**Sharing Approval Policy**: Manual

> **Reference range**
* high: 50 1/min (Details: UCUM code1/min = '1/min')
* type: Terapeutiske grænseværdier for RØD alarm

> **Reference range**
* low: 50.0000001 1/min (Details: UCUM code1/min = '1/min')
* high: 60 1/min (Details: UCUM code1/min = '1/min')
* type: Terapeutiske grænseværdier for GUL alarm

> **Reference range**
* low: 110 1/min (Details: UCUM code1/min = '1/min')
* high: 129.9999999 1/min (Details: UCUM code1/min = '1/min')
* type: Terapeutiske grænseværdier for GUL alarm

> **Reference range**
* low: 130 1/min (Details: UCUM code1/min = '1/min')
* type: Terapeutiske grænseværdier for RØD alarm

**instantiatesCanonical**: [Puls](ActivityDefinition-ad-extra-pulse.md)

**status**: Active

**intent**: Order

**code**: Hjerte—Systole; frekv. = ? × 1/min

**subject**: [Andreas Bonde (official) Male, DoB: 1996-07-12 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#1207969563 (use: official))](Patient-p06.md)

**occurrence**: Once



## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "p06-cp2-sr-extra-pulse",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare",
    "valueReference" : {
      "reference" : "EpisodeOfCare/p06-eoc2"
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-policies",
        "code" : "sharingAllowedDestinationNationalHealthData"
      }]
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
    "valueBoolean" : true
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-trigger-enablement-code",
    "valueCode" : "NO_TRIGGER"
  },
  {
    "extension" : [{
      "url" : "status",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/request-status",
          "code" : "active"
        }]
      }
    },
    {
      "url" : "period",
      "valuePeriod" : {
        "start" : "2026-09-29T09:05:00+00:00"
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest-statusHistory"
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingApprovalPolicy",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-approval-policies",
        "code" : "manual"
      }]
    }
  },
  {
    "extension" : [{
      "url" : "high",
      "valueQuantity" : {
        "value" : 50,
        "unit" : "1/min",
        "system" : "http://unitsofmeasure.org",
        "code" : "1/min"
      }
    },
    {
      "url" : "type",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "urn:oid:1.2.208.184.100.1",
          "code" : "RAL"
        },
        {
          "system" : "urn:oid:1.2.208.176.2.1",
          "code" : "NPU21692"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange"
  },
  {
    "extension" : [{
      "url" : "low",
      "valueQuantity" : {
        "value" : 50.0000001,
        "unit" : "1/min",
        "system" : "http://unitsofmeasure.org",
        "code" : "1/min"
      }
    },
    {
      "url" : "high",
      "valueQuantity" : {
        "value" : 60,
        "unit" : "1/min",
        "system" : "http://unitsofmeasure.org",
        "code" : "1/min"
      }
    },
    {
      "url" : "type",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "urn:oid:1.2.208.184.100.1",
          "code" : "GAL"
        },
        {
          "system" : "urn:oid:1.2.208.176.2.1",
          "code" : "NPU21692"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange"
  },
  {
    "extension" : [{
      "url" : "low",
      "valueQuantity" : {
        "value" : 110,
        "unit" : "1/min",
        "system" : "http://unitsofmeasure.org",
        "code" : "1/min"
      }
    },
    {
      "url" : "high",
      "valueQuantity" : {
        "value" : 129.9999999,
        "unit" : "1/min",
        "system" : "http://unitsofmeasure.org",
        "code" : "1/min"
      }
    },
    {
      "url" : "type",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "urn:oid:1.2.208.184.100.1",
          "code" : "GAL"
        },
        {
          "system" : "urn:oid:1.2.208.176.2.1",
          "code" : "NPU21692"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange"
  },
  {
    "extension" : [{
      "url" : "low",
      "valueQuantity" : {
        "value" : 130,
        "unit" : "1/min",
        "system" : "http://unitsofmeasure.org",
        "code" : "1/min"
      }
    },
    {
      "url" : "type",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "urn:oid:1.2.208.184.100.1",
          "code" : "RAL"
        },
        {
          "system" : "urn:oid:1.2.208.176.2.1",
          "code" : "NPU21692"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange"
  }],
  "instantiatesCanonical" : ["http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-pulse"],
  "status" : "active",
  "intent" : "order",
  "code" : {
    "coding" : [{
      "system" : "urn:oid:1.2.208.176.2.1",
      "code" : "NPU21692",
      "display" : "Hjerte—Systole; frekv. = ? × 1/min"
    }]
  },
  "subject" : {
    "reference" : "Patient/p06"
  },
  "occurrenceTiming" : {
    "repeat" : {
      "boundsPeriod" : {
        "start" : "2026-09-29T09:05:00+00:00",
        "end" : "2099-12-31T23:00:00+00:00"
      }
    }
  }
}

```
