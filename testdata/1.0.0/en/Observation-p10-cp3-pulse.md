# Pulse 118/min (open episode) - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pulse 118/min (open episode)**

## Example Observation: Pulse 118/min (open episode)

Profile: [ehealth-observation](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-observation.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**Episode of care**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = active; period = 2026-09-29 09:00:00+0000 --> (ongoing)](EpisodeOfCare-p10-eoc3.md)

> **Resolved timing**
* serviceRequestVersionId: 1
* type: Extra

**identifier**: [eHealthIdentifier](http://ehealth.sundhed.dk/fhir/11.0.5/NamingSystem-ehealth-identifier.html)/${SUBMISSION_UUID}

**basedOn**: [ServiceRequest Hjerte—Systole; frekv. = ? × 1/min](ServiceRequest-p10-cp3-sr-extra-pulse.md)

**status**: Final

**code**: Hjerte—Systole; frekv. = ? × 1/min

**subject**: [Martin Kristensen (official) Male, DoB: 2004-10-05 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0510049527 (use: official))](Patient-p10.md)

**effective**: 2026-09-30 10:00:00+0000

**performer**: [Martin Kristensen (official) Male, DoB: 2004-10-05 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0510049527 (use: official))](Patient-p10.md)

**value**: 118 1/min (Details: UCUM code1/min = '1/min')

> **referenceRange****high**: 50 1/min (Details: UCUM code1/min = '1/min')**type**: Terapeutiske grænseværdier for RØD alarm

> **referenceRange****low**: 50.0000001 1/min (Details: UCUM code1/min = '1/min')**high**: 60 1/min (Details: UCUM code1/min = '1/min')**type**: Terapeutiske grænseværdier for GUL alarm

> **referenceRange****low**: 110 1/min (Details: UCUM code1/min = '1/min')**high**: 129.9999999 1/min (Details: UCUM code1/min = '1/min')**type**: Terapeutiske grænseværdier for GUL alarm

> **referenceRange****low**: 130 1/min (Details: UCUM code1/min = '1/min')**type**: Terapeutiske grænseværdier for RØD alarm



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "p10-cp3-pulse",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare",
    "valueReference" : {
      "reference" : "EpisodeOfCare/p10-eoc3"
    }
  },
  {
    "extension" : [{
      "url" : "serviceRequestVersionId",
      "valueId" : "1"
    },
    {
      "url" : "type",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://ehealth.sundhed.dk/cs/resolved-timing-type",
          "code" : "Extra"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing"
  }],
  "identifier" : [{
    "system" : "http://ehealth.sundhed.dk/id/ehealth-identifier",
    "value" : "${SUBMISSION_UUID}"
  }],
  "basedOn" : [{
    "reference" : "ServiceRequest/p10-cp3-sr-extra-pulse"
  }],
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "urn:oid:1.2.208.176.2.1",
      "code" : "NPU21692",
      "display" : "Hjerte—Systole; frekv. = ? × 1/min"
    }]
  },
  "subject" : {
    "reference" : "Patient/p10"
  },
  "effectiveDateTime" : "2026-09-30T10:00:00+00:00",
  "performer" : [{
    "reference" : "Patient/p10"
  }],
  "valueQuantity" : {
    "value" : 118,
    "unit" : "1/min",
    "system" : "http://unitsofmeasure.org",
    "code" : "1/min"
  },
  "referenceRange" : [{
    "high" : {
      "value" : 50,
      "unit" : "1/min",
      "system" : "http://unitsofmeasure.org",
      "code" : "1/min"
    },
    "type" : {
      "coding" : [{
        "system" : "urn:oid:1.2.208.184.100.1",
        "code" : "RAL"
      },
      {
        "system" : "urn:oid:1.2.208.176.2.1",
        "code" : "NPU21692"
      }]
    }
  },
  {
    "low" : {
      "value" : 50.0000001,
      "unit" : "1/min",
      "system" : "http://unitsofmeasure.org",
      "code" : "1/min"
    },
    "high" : {
      "value" : 60,
      "unit" : "1/min",
      "system" : "http://unitsofmeasure.org",
      "code" : "1/min"
    },
    "type" : {
      "coding" : [{
        "system" : "urn:oid:1.2.208.184.100.1",
        "code" : "GAL"
      },
      {
        "system" : "urn:oid:1.2.208.176.2.1",
        "code" : "NPU21692"
      }]
    }
  },
  {
    "low" : {
      "value" : 110,
      "unit" : "1/min",
      "system" : "http://unitsofmeasure.org",
      "code" : "1/min"
    },
    "high" : {
      "value" : 129.9999999,
      "unit" : "1/min",
      "system" : "http://unitsofmeasure.org",
      "code" : "1/min"
    },
    "type" : {
      "coding" : [{
        "system" : "urn:oid:1.2.208.184.100.1",
        "code" : "GAL"
      },
      {
        "system" : "urn:oid:1.2.208.176.2.1",
        "code" : "NPU21692"
      }]
    }
  },
  {
    "low" : {
      "value" : 130,
      "unit" : "1/min",
      "system" : "http://unitsofmeasure.org",
      "code" : "1/min"
    },
    "type" : {
      "coding" : [{
        "system" : "urn:oid:1.2.208.184.100.1",
        "code" : "RAL"
      },
      {
        "system" : "urn:oid:1.2.208.176.2.1",
        "code" : "NPU21692"
      }]
    }
  }]
}

```
